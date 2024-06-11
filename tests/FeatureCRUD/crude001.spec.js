import { test, expect } from '@playwright/test';

// #CRUD001
test('To test successful create new task', async ({ page}) => {
    await page.goto("http://127.0.0.1:2002/tasks/create");
    await page.getByLabel('E-mail Address').fill("chin@123.gmail.com");
    await page.getByLabel('Password').fill('chin@123.gmail.com');
    await page.getByRole('button', {name: 'Login'}).click();

    //create tasks
    await page.getByLabel('Task Name').fill('Checking Task');
    await page.getByLabel('Description').fill('TP13: Automate test with playwright.');
    await page.getByRole('button', {name: 'Create Task'}).click();

    await page.goto(" http://127.0.0.1:2002/tasks ");

    await expect(page.getByRole('row', { name: 'Checking Task'})).toBeVisible();
})