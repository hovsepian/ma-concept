<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CredentialRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CredentialCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CredentialCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Credential::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/credential');
        CRUD::setEntityNameStrings('credential', 'credentials');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CredentialRequest::class);



        $this->crud->addField([
            'name' => 'title',
            'type' => 'text',
            'label' => "Credentials name"
        ]);

        $this->crud->addField([
            'name' => 'thumbnail',
            'type' => 'upload',
            'label' => "Featured Image",
            'upload' => true,
            'disk' => 'public',
            'prefix' => 'uploads/'
        ]);

        $this->crud->addField([
            'name' => 'description',
            'type' => 'textarea',
            'label' => "Description"
        ]);

        $this->crud->addField([
            'name'      => 'photos',
            'label'     => 'Photos',
            'type'      => 'upload_multiple',
            'upload'    => true,
            'disk'      => 'public',
            'prefix'    => 'uploads/'
        ]);
        CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
