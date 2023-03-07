<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    include('./includes/header.php');
    include_once 'classes/Job.php';

    $job_id = $_GET['id'];
    $job = Job::getJobById($job_id);
    ?>

    <div class="container w-3/4 mx-auto p-5 overflow-hidden my-20 border-2 border-black">
        <h1 class="text-5xl font-semibold"><?php echo $job->getTitle(); ?></h1>
        <h1 class="text-2xl font-semibold"><?php echo $job->getCompnayName(); ?></h1>
        <p class="text-xl"><?php echo $job->getLocation(); ?></p>
        <p class="my-2"><?php echo $job->getDescription(); ?></p>
        <p class="job-requirements my-2"><?php echo $job->getRequirements(); ?></p>
        <p class="text-xl font-semibold"><?php echo $job->getSalery(); ?></p>
        <h2 class="m-5 text-2xl font-semibold text-center">Apply for this Job</h2>
        <form class="max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-xl p-8" action="apply.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="job_id" value="<?php echo $job_id; ?>">
            <div class="mb-6">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300" />
            </div>
            <div class="mb-6">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300" />
            </div>
            <div class="mb-6">
                <label for="phone" class="block text-gray-700 font-bold mb-2">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300" />
            </div>
            <div class="mb-6">
                <label for="resume" class="block text-gray-700 font-bold mb-2">Image</label>
                <input type="file" id="resume" name="resume" class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300" />
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue">
                    Submit
                </button>
            </div>
        </form>

    </div>
    <?php
    include_once 'includes/footer.php';
    ?>



</body>

</html>