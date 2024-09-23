<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>reCaptcha</title>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
              class="hover:bg-[#f5f5f5] p-3 hover:rounded-md rounded-md">Log-in</a>
          </li>
          <li
            class="transition ease-in-out delay-150 hover:scale-100 hover:-translate-y-1">
            <a
              href="contact.php"
              class="mx-5 hover:bg-[#f5f5f5] p-3 active hover:rounded-md rounded-md">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="relative mx-auto my-5">
      <div
        class="absolute bg-[white] inset-0 rounded-md shadow-lg h-[500px] w-[800px] mx-auto">
        <div class="grid grid-cols-2 p-6">
          <div class="mx-5 my-10 border-r-2 border-gainsboro">
            <h2 class="font-bold tracking-[1px] text-[36px]">Contact Us</h2>
            <div class="my-5">
              <h4 class="text-gray-500 mb-1 text-[18px]">Contacts.</h4>
              <div class="text-[14px]">
                <p>johnDoe@gmail.com</p>
                <p>09123456789</p>
              </div>
            </div>
            <div class="my-5 w-[50%]">
              <h4 class="text-gray-500 mb-1 text-[18px]">Address.</h4>
              <div class="text-[14px]">
                <p>Banda rito, Banda roon ST. Gulayan Stocks</p>
              </div>
            </div>
          </div>
          <div
            class="mx-5 relative my-10 bg-[#F5F5F5] rounded-md shadow-lg border-2">
            <h3
              class="absolute top-[-15px] font-bold text-[18px] text-center">
              Contact Form
            </h3>
            <form class="p-4" method="POST" action="../php/contact_proc.php">
              <div class="">
                <label class="tracking-[1px] font-bold text-[14px]">
                  Email
                </label>
                <input
                  type="text"
                  class="p-2 rounded border-2 my-2 w-full"
                  name="email"
                  required
                  placeholder="johnDoe@example.com" />
              </div>
              <div class="mb-3">
                <label class="tracking-[1px] font-bold text-[14px]">
                  Message
                </label>
                <textarea class="w-full p-3" placeholder="Send Message" name="message"
                  required></textarea>
              </div>
              <div class="g-recaptcha  mx-auto items-center flex justify-center" data-sitekey="YOUR_SITE_KEY"></div>

              <button type="submit" name="submit" class="btn my-3  font-bold hover:bg-white hover:opacity-80 bg-gradient-to-r from-sky-500 to-sky-600 text-white p-2 rounded tracking-[1px] w-full">Send a Message</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>