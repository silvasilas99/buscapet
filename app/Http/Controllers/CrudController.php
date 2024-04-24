<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Model instance
     *
     * @var Model $model
     */
    protected $model;

    public function index()
    {
        try {
            $data = $this->model::all();

            return response()->json(
                ['data' => $data]
            );
        } catch (\Throwable $th) {
            return response()->json(
                ['error' => $th->getMessage()]
            );
        }
    }

    public function findById(string $id)
    {
        try {
            $item = $this->model->find($id);

            return response()->json(
                ['item' => $item]
            );
        } catch (\Throwable $th) {
            return response()->json(
                ['error' => $th->getMessage()]
            );
        }
    }

    public function store(Request $req)
    {
        try {
            $data = $req->all();
            $newItemId = $this->model->create($data);

            return response()->json(
                ['item_id' => $newItemId->id]
            );
        } catch (\Throwable $th) {
            return response()->json(
                ['error' => $th->getMessage()]
            );
        }
    }

    public function update(string $id, Request $req)
    {
        try {
            $data = $req->all();
            $this->model->find($id)->update($data);

            return response()->json(
                ['message' => 'Item updated with success.']
            );
        } catch (\Throwable $th) {
            return response()->json(
                ['error' => $th->getMessage()]
            );
        }
    }

    public function destroy(string $id)
    {
        try {
            $this->model->find($id)->delete();
            return response()->json(
                ['message' => 'Item deleted with success.']
            );
        } catch (\Throwable $th) {
            return response()->json(
                ['error' => $th->getMessage()]
            );
        }
    }
}
