<?php
// Adding pagetitle and header
$pagetitle = "Create an account";
require_once "assets/header.php";
?>

<form class="max-w-sm mx-auto">
  <div class="mb-5">
    <!-- For user name -->
    <label for="User Name" class="block mb-2.5 text-sm font-medium text-heading">User Name</label>
    <input type="text" id="User Name" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="User Name" required />
  </div>
  <!-- Phone number -->
  <div class="mb-5">
    <label for="Phone Number" class="block mb-2.5 text-sm font-medium text-heading">Phone Number</label>
    <input type="Phone Number" id="Phone Number" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Phone Number" required  pattern="/^(0|\+234)[789][01]\d{8}$/"/>
  </div>
  <!-- emial -->
<div class="mb-5">
    <label for="Email" class="block mb-2.5 text-sm font-medium text-heading">Email</label>
    <input type="Email" id="Email" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="name@gmail.com" required />
  </div>
  <!-- password -->
  <div class="mb-5">
    <label for="Password" class="block mb-2.5 text-sm font-medium text-heading">Password</label>
    <input type=" Password" id="Password" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="oooooooo" required />
  </div>
  <!-- cpassword -->
  <div class="mb-5">
    <label for=" Confirm Password" class="block mb-2.5 text-sm font-medium text-heading"> Confirm Password</label>
    <input type="  confirm Password" id=" confirm Password" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="oooooooo" required />
  </div>
  <!-- verified at -->
   <div class="mb-5">
    <label for="Verified at" class="block mb-2.5 text-sm font-medium text-heading">Verified at</label>
    <input type=" verified at" id="verified at" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Verified At" required />
  </div>
  <!--otp code  -->
  <div class="mb-5">
    <label for="OTP CODE" class="block mb-2.5 text-sm font-medium text-heading">OTP CODE</label>
    <input type=" otp code" id="otp code" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Enter Code" required />
  </div>
  <!-- Role -->
   <div class="mb-5">
    <label for="Role" class="block mb-2.5 text-sm font-medium text-heading">Role</label>
    <input type=" Role" id="Role" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Role" required />
  </div>
  <!-- mfa enabled for authentication -->
   <div class="mb-5">
    <label for="MFA_Enabled" class="block mb-2.5 text-sm font-medium text-heading">MFA_Enabled</label>
    <input type="MFA_Enabled " id="MFA_Enabled" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="MFA_Enabled" required />
  </div>
  <!-- Last Login -->
   <div class="mb-5">
    <label for="Last Login" class="block mb-2.5 text-sm font-medium text-heading">Last Login</label>
    <input type=" last login" id="last login" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Last Login" required />
  </div>
  <!-- Status -->
   <div class="mb-5">
    <label for="Status" class="block mb-2.5 text-sm font-medium text-heading">Status</label>
    <input type=" Status" id="status" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="status" required />
  </div>
  
  
  
  
  
  





  
  <label for="remember" class="flex items-center mb-5">
    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-default-medium rounded-xs bg-neutral-secondary-medium focus:ring-2 focus:ring-brand-soft" required />
    <p class="ms-2 text-sm font-medium text-heading select-none">I agree with the <a href="#" class="text-fg-brand hover:underline">terms and conditions</a>.</p>
  </label>
  <button type="submit" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Submit</button>
</form>
