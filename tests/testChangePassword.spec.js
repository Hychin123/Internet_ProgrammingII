import { test, expect } from '@playwright/test';

test('Password Reset Automation with Google Sign-In for Mailtrap', async ({ page, context }) => {
  // Step 1: Navigate to the registration page
  await page.goto('http://127.0.0.1:2002/login');

  // Step 2: Click link "Forgot Your Password?"
  await page.click('text=Forgot Your Password?');

  // Step 3: Input your email address
  await page.fill('input[name="email"]', 'chin@123.gmail.com');

  // Step 4: Click button "Send Password Reset Link"
  await page.click('text=Send Password Reset Link');

  // Step 5: Check your email address

  // (This part will be done in Mailtrap to retrieve the reset link)
  // Wait for some time to ensure the email is sent
  await page.waitForNavigation();

  // Step 7: Go to https://mailtrap.io/signin
  await page.goto('https://mailtrap.io/signin');

  // Step 8: Click "Sign in with Google"
  const [googlePopup] = await Promise.all([
    context.waitForEvent('page'),
    page.click('text=Sign in with Google')
  ]);

  // Step 9: Handle Google login in the new popup
  await googlePopup.waitForLoadState();
  await googlePopup.fill('input[type="email"]', 'hychin247@gmail.com');
  await googlePopup.click('text=Next');

  await googlePopup.waitForTimeout(2000); // Adjust this based on your network speed

  await googlePopup.fill('input[type="password"]', '');
  await googlePopup.click('text=Next');

  // Step 10: Wait for navigation back to Mailtrap
  await googlePopup.waitForNavigation();
  await googlePopup.close();

  // Step 11: Click on "Email Testing"
  await page.click('text=Email Testing');

  // Step 12: Click on "Demo Inbox"
  await page.click('text=Demo Inbox');

  // Step 13: Find the email sent by Laravel
  const email = await page.locator('text=Laravel').first();
  await email.click();

  // Step 14: Click on link reset
  const resetLink = await page.locator('a:has-text("reset your password")').first();
  const resetUrl = await resetLink.getAttribute('href');
  await page.goto(resetUrl);

  // Step 15: Set new password
  await page.fill('input[name="password"]', 'new-password');
  await page.fill('input[name="password_confirmation"]', 'new-password');
  await page.click('text=Reset Password');

  // Step 16: Assert that the password reset was successful
  await expect(page).toHaveURL('http://127.0.0.1:8000/login');
  await expect(page.locator('text=Your password has been reset!')).toBeVisible();
});
