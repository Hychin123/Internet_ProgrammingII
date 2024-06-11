import { test, expect } from '@playwright/test';

test('To login a new user on the web application', async ({ page }) => {

    await page.goto('http://127.0.0.1:2002/login');

    //find register button by test
    //await page.getByText('Register').click();

    //name 
    // await page.getByLabel("Name").fill("chin");

    //fill name in register page
    await page.getByLabel("E-Mail").fill("chin@123.gmail.com");

    //password
    //exact true, catch it is password not password method or ...
    await page.getByLabel("Password", {exact:true}).fill("chin@123.gmail.com");
    //confirm password
    // await page.getByLabel("Confirm Password", {exact:true}).fill("chin@123.gmail.com");

    //click register
    //find button named Register
    await page.getByRole("button", {name: "Login"}).click();

    await expect(page.getByText("You are logged in!")).toBeVisible();


   
  
    // Expect a title "to contain" a substring.
    // await expect(page).toHaveTitle(/Playwright/);
  });