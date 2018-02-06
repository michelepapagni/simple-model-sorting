# Simple Model Sorting
This is a simple model sorting for laravel

## Getting Started
Copy the trait in your src (or in the folder that you prefered) and change the placeholder namespace with the right one.

## Include the Trait in your model classes
Use the in your model or in your base model, e.g:
```
use NamespaceToTrait\Sortable;

class BaseModel extends Model
{
    use Sortable;
}
```

## Add in your model class the columns sortable
```
class Model extends BaseModel
{
    protected $sortableColumns = ['name', 'email'];
    ...
}
```

## Use the new scope in your sortable queries
```
return Model::sortable()->paginate(10);
```

## Frontend 
Append these get params in a route with sortable scope:

s (sortable) = Here populate with the name of the column (required) <br>
d (direction) = Here populate with the direction of the order (optional, default 'desc')

```
?s=name&d=asc
```
