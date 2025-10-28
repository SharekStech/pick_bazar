You are a Laravel expert. I have a Laravel project with the following structure:

- Routes file: api\packages\marvel\src\Rest\Routes.php
- Controllers directory: api\packages\marvel\src\Http\Controllers
- Migrations directory: api\database\migrations

I want to implement a **Flash Sale system** with a full CRUD API. 

Requirements:

1. Database table: `flash_sales` with fields:
   - id (primary key, auto-increment)
   - product_id (integer, foreign key to products table)
   - discount_percentage (decimal)
   - start_time (datetime)
   - end_time (datetime)
   - status (enum: 'active', 'inactive')
   - created_at, updated_at (timestamps)

2. API endpoints in `Routes.php`:
   - GET `/api/flash-sales` → list all flash sales
   - GET `/api/flash-sales/{id}` → get flash sale by ID
   - POST `/api/flash-sales` → create new flash sale
   - PUT `/api/flash-sales/{id}` → update existing flash sale
   - DELETE `/api/flash-sales/{id}` → delete flash sale

3. Controller: `FlashSaleController.php` in `api\packages\marvel\src\Http\Controllers` with methods:
   - `index()`
   - `show($id)`
   - `store(Request $request)`
   - `update(Request $request, $id)`
   - `destroy($id)`

4. Validation rules for create/update:
   - product_id: required, exists in products table
   - discount_percentage: required, numeric, 0-100
   - start_time: required, date, after_or_equal:now
   - end_time: required, date, after:start_time
   - status: required, in:active,inactive

5. Responses:
   - JSON response with `success` or `error` and `data` or `message`.

6. Include database migration file for `flash_sales` table.

Please generate the **full Laravel API CRUD code**, including:
- Migration
- Model (FlashSale.php)
- Controller (FlashSaleController.php)
- API routes
- Validation rules

Output the full code in a ready-to-use format.
now i want flash sell system. now create api full crud for flash sell create contrller 


















