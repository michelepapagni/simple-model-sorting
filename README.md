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

## Use the new scope in your sortable queries
```
return Model::sortable()->paginate(10);
```
