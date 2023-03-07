<?php
include_once './classes/job.php';

$jobs = JOb::getAllJobs();

?>

<div class="container mx-auto py-6 px-40">
    <h1 class="text-center text-3xl font-bold my-5">All Jobs</h1>
    <?php if (count($jobs) == 0) : ?>
        <p>No Jobs Found</p>
    <?php else : ?>
        <div class="grid grid-cols-2 gap-6">

            <?php foreach ($jobs as $job) : ?>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2"><?php echo $job->getTitle(); ?></h3>
                        <p class="text-gray-600 text-sm mb-2"><?php echo $job->getCompnayName(); ?></p>
                        <p class="text-gray-700 font-bold text-lg mb-2"><?php echo $job->getSalery(); ?></p>
                        <p class="text-gray-600 text-sm mb-4"><?php echo $job->getRequirements(); ?></p>
                        <p class="text-gray-700 font-bold text-lg mb-5"><?php echo $job->getLocation(); ?></p>
                        <a href="jobdetails.php?id=<?php echo $job->getId(); ?>" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">View Details</a>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    <?php endif; ?>
</div>