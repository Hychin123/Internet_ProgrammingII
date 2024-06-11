import { test, expect } from '@playwright/test';

// #CRUD003
test ('To test successful delete task', async ({ page }) => {
    await page.goto("http://127.0.0.1:2002/tasks");
    await page.getByLabel('E-Mail Address').fill('chin@123.gmail.com');
    await page.getByLabel('Password').fill('chin@123.gmail.com');
    await page.getByRole('button', {name: 'Login'}).click();

    await page.locator('.fa.fa-pencil').first().click();
    await page.getByRole('button', {name: 'Delete Task'}).click();
    await expect(page.getByRole('heading', { name: 'Task Deleted'})).toBeVisible();



}) 