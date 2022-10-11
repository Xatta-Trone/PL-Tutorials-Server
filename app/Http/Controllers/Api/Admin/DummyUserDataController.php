<?php

namespace App\Http\Controllers\Api\Admin;

use App\Exports\UserDataExport;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserDataResource;
use App\Imports\DummyUserDataImport;
use App\Models\Admin\DummyUserData;
use App\Traits\DummyUserDataTrait;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Maatwebsite\Excel\Facades\Excel;

class DummyUserDataController extends Controller
{
    use DummyUserDataTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            DummyUserData::all()
                ->each(function ($oldRecord) {
                    $newRecord = $oldRecord->replicate();
                    $newRecord->setTable('user_data');
                    $newRecord->save();
                    $oldRecord->delete();
                });
            return response()->json([
                'message' => self::$USERDATA_CREATED,
                'status' => 'true',
                // 'count' => DummyUserData::all()->count(),
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => self::$DUPLICATR_STUDENT_ID,
                'status' => 'false',
            ], 422);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required',
        ]);

        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $request->file('file')->storeAs('/public/files', $fileName);

        try {
            DummyUserData::truncate();
            Excel::import(new DummyUserDataImport(), public_path('storage/files/' . $fileName));

            Artisan::call('names:ucwords', ['table' => 'dummy_user_data']);

            return response()->json([
                'message' => self::$USERDATA_CREATED,
                'status' => 'true',
                'count' => DummyUserData::count(),
            ], 201);
        } catch (QueryException $e) {
            if ($this->isDuplicateEntryException($e)) {
                // echo 'Data Not inserted because duplicate student id found';

                return response()->json([
                    'message' => self::$DUPLICATR_STUDENT_ID,
                    'status' => 'false',
                ], 422);
            }

            throw $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    private function isDuplicateEntryException(QueryException $e)
    {
        $sqlState = $e->errorInfo[0];
        $errorCode = $e->errorInfo[1];
        if ($sqlState === '23000' && $errorCode === 1062) {
            return true;
        }

        return false;
    }


    public function backupData()
    {
        return Excel::download(new UserDataExport, 'users.xlsx');
    }
}