<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>reCaptcha</title>

  <head>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .poppins {
      font-family: "Poppins", sans-serif;
      font-weight: 100;
      font-style: normal;
    }

    .active {
      background-color: #f5f5f5;
      -webkit-box-shadow: 6px 16px 24px -22px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 6px 16px 24px -22px rgba(0, 0, 0, 0.75);
      box-shadow: 6px 16px 24px -22px rgba(0, 0, 0, 0.75);
    }
  </style>
</head>

<body class="poppins">
  <div class="w-full h-screen bg-[#ECEBE9] relative bg-no-repeat bg-cover"
    style="background-image: url('../images/bg.png');">
    <nav
      class="bg-white flex justify-between items-center p-6 font-bold text-[18px] shadow-lg rounded-b-[50px]">
      <h3 class="mx-10">IAS-ACT</h3>
      <div class="">
        <ul class="font-bold tracking-[1px] flex items-center">
          <li
            class="transition ease-in-out delay-150 hover:scale-100 hover:-translate-y-1">
            <a
              href="login.php"
              class="hover:bg-[#f5f5f5] p-3 hover:rounded-md active rounded-md">Log-in</a>
          </li>
          <li
            class="transition ease-in-out delay-150 hover:scale-100 hover:-translate-y-1">
            <a
              href="contact.php"
              class="mx-5 hover:bg-[#f5f5f5] p-3 hover:rounded-md rounded-md">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="relative mx-auto">
      <div
        class="absolute bg-[white] inset-0 my-[3rem] rounded-md shadow-lg h-[490px] w-[30%] mx-auto">
        <div class="login p-8">
          <h4 class="font-bold tracking-[1px] text-[32px]">Login</h4>
          <p class="text-gray-400 text-[14px] my-2">
            Please insert your valid crendentials.
          </p>
          <form method="POST" action="../php/process.php">
            <div class="flex flex-col">
              <label class="font-[500] mb-2 my-3">Username</label>
              <input
                type="text"
                name="username"
                placeholder="Username"
                class="bg-[#f5f5f5] p-2 rounded border-2 username"
                required />
            </div>
            <div class="flex flex-col">
              <label class="font-[500] mb-2 my-3 pass">Password</label>
              <input
                type="password"
                name="password"
                placeholder="Password"
                class="bg-[#f5f5f5] p-2 rounded border-2 pass" required />
            </div>
            <div class="g-recaptcha my-5 w-full mx-auto items-center flex justify-center" data-sitekey="YOUR_SITE_KEY"></div>

            <button type="submit" name="submit" class="btn font-bold hover:bg-white hover:opacity-80 bg-gradient-to-r from-sky-500 to-sky-600 text-white p-2 rounded tracking-[1px] w-full">Login</button>

            <p class="text-[12px] my-2 text-green-700 success"></p>
            <p class="text-[12px] my-2 text-red-700 failed"></p>
          </form>


        </div>
      </div>
    </div>
  </div>



</body>

</html>