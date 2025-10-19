You are a senior Laravel developer.

I have a Laravel project with this structure:
- Migration path: api/database/migrations
- Seeder path: api/database/seeders
- Model path: api/packages/marvel/src/Database/Models

Your task:
1. Run `php artisan migrate --seed`.
2. If any error occurs (for example: "Integrity constraint violation", "column not found", or "foreign key fails"), analyze the cause.
3. Fix the issue automatically by doing the following:
   - If a table is missing a column that a seeder tries to insert, add that column in the corresponding migration file.
   - If a related seeder or table does not exist, create it based on the relationship and data used.
   - If a foreign key constraint fails, fix the seeding order (for example, seed `users` before `shops` if `shops.owner_id` references `users.id`).
4. Update `api/database/seeders/DatabaseSeeder.php` to reflect the correct order of seeder calls.
5. Ensure all migrations and seeders are valid, complete, and can run without errors.
6. Finally, output:
   - A list of changes made (new columns, fixed relationships, new seeders).
   - The corrected DatabaseSeeder.php file showing the proper order.
   - Confirmation that `php artisan migrate --seed` can now run successfully.

Focus on fixing automatically — no need to just describe the issue, show the corrected migration and seeder code.
