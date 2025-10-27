I have a Laravel project. All my API routes are defined in the file:
C:\laragon\www\pick_bazar\admin\graphql\src\graphql

I want to generate a **Postman collection JSON** for all these APIs so I can import it into Postman.

Requirements:
1. Extract **all routes**, including:
   - HTTP method (GET, POST, PUT, DELETE, PATCH)
   - URL path
   - Controller method (optional for description)
   - Middleware info (optional)
   - Any route parameters (e.g., {id})
2. For each API, generate a **Postman request** with:
   - Name = Controller@method or route name
   - URL = local base URL (e.g., http://localhost:8000/api/...)
   - Method = HTTP method
   - Body = raw JSON if method is POST, PUT, PATCH (with placeholder data)
   - Headers = Content-Type: application/json
3. Group APIs into folders based on route prefixes if applicable (e.g., /users, /products)
4. Output a **complete Postman collection JSON** that I can save to:
   `C:\laragon\www\pick_bazar\postman api\pick_bazar.postman_collection.json`
5. Make sure JSON is valid and importable in Postman.
6. Include placeholder example values for any route parameters or request bodies.

Give me **ready-to-save Postman collection graph JSON** output.
Extra: If some APIs require authentication, include a placeholder header `Authorization: Bearer {{token}}`.




















