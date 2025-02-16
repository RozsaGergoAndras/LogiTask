<?php

namespace App\Services;
use App\Models\Packages;
use App\Models\Productionbatches;
use App\Models\Taskcontent;
use App\Models\Tasks;
use App\Models\User;

class TaskDistributionService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    

    public function HandleTaskDistribution()
    {
        $productionBathces = Productionbatches::where('remainingCount', '>', 0)->get();
        if(count($productionBathces) == 0){
            return true;
        }

        foreach ($productionBathces as $batch) {
            $productionflowContent = $batch->blueprint->productionflow->productionflowContents()
                                            ->where('sequentialnumber', $batch->productionState)
                                            ->first();
            $assignableWorkers = $this->GetAllocatableWorkers($productionflowContent->tasktype);
            if(count($assignableWorkers) > 0){
                //create new task
                $newTask = Tasks::create([
                    'assigner' => $batch->assigner(), 
                    'worker' => $assignableWorkers[0], 
                    'state' => 0,  
                    'state1Date' => null, 
                    'state2Date' => null, 
                    'taskType' => $productionflowContent->tasktype(), 
                ]);
                $newTask->save();

                //create package
                $newPackage = Packages::create([ 
                    'creatorId',
                ]);
                $newPackage->save();

                //create new taskcontent
                $newTaskContent = Taskcontent::create([
                    'taskId' => $newTask->id,
                    'packageId',
                    'link',
                    'workstation' =>0,
                ]);
                $newTaskContent->save();


                //lockoljuk a tábla rekordját
                $batch->hasActiveTask = true;
                $batch->save();
                //lockoljuk a workert
                $assignableWorkers[0]->workerState = 2;
                $assignableWorkers[0]->isAssigned = true;
                $assignableWorkers[0]->save();
            }
        }

    }

    public function GetAllocatableWorkers($tasktype){
        $assignableWorkers = User::where('role', $tasktype->assignableRole)->get();
        return $assignableWorkers;
    }
}
