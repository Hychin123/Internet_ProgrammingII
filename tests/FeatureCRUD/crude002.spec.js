import { test, expect } from '@playwright/test';

// #CRUD002
test('To test edit task without checking completed box', async ({ page }) => {

    await page.goto("http://127.0.0.1:2002/tasks");

    await page.getByLabel('E-Mail Address').fill('chin@123.gmail.com');

    await page.getByLabel('Password').fill('chin@123.gmail.com');
    await page.getByRole('button', {name: 'Login'}).click();

    await page.locator('.fa.fa-pencil').first().click();
    
    //update Task Name with "updated at the end"
    const taskNameInput = page.getByLabel('Task Name');
    const currentValue = await taskNameInput.inputValue();
    const updatedValue = currentValue+" updated";
    await taskNameInput.fill(updatedValue);

    //update description
    const NameInput = page.getByLabel('Task Description');
    const current = await NameInput.inputValue();
    const updated = current+" updated";
    await NameInput.fill(updated);

    //save change
    await page.getByRole('button', {name: 'Save Changes'}).click();

    await expect(page.getByRole('row', { name: 'updated'})).toBeVisible();
})