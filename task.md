Currently, my models are located in:
api/packages/marvel/src/Database/Models

I want to move them to the standard Laravel models directory:
api/app/Models
Also, my controllers are located in:
api/packages/marvel/src/Http/Controllers
I want to move them to:
api/app/Http/Controllers
Your task:
1. Move all model files to api/app/Models.
2. Move all controller files to api/app/Http/Controllers.
3. Update namespace declarations:
   For Models: change from `namespace Marvel\Database\Models;` to `namespace App\Models;`
   For Controllers: change from `namespace Marvel\Http\Controllers;` to `namespace App\Http\Controllers;`
4. Fix and update all import references across the project to use the new namespaces.
5. Ensure factory, seeder, repository, service, and route references still work.
6. If any references use `Marvel\Database\Models\` or `Marvel\Http\Controllers\`, update them to the new namespaces.

Finally, generate the full updated commands, script, or step-by-step instructions to safely refactor and test the change.