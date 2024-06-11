import { test, expect } from '@playwright/test';

test('Login and Logout Automation', async ({ page }) => {


  // Step 1: Navigate to the login page
  await page.goto('http://127.0.0.1:2002/login');


  // Step 2: Fill in email and password, then click on the Login button
  await page.getByLabel("E-Mail Address").fill("chin@123.gmail.com");

    //password
    await page.getByLabel("Password").fill("chin@123.gmail.com"); // Replace 'your-password' with the actual password
  
  await page.getByRole("button", {name: "Login"}).click();

  // Wait for the login success message
  await expect(page.getByText("You are logged in!")).toBeVisible();

 //find account button
  await page.getByRole("button", {name: "chin"}).click();
  await page.getByRole("link", {name: "Logout"}).click();

  await expect(page.getByText("Your Application's Landing Page.")).toBeVisible();

});
