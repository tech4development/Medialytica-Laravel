<div class="col-span-12">
    <div class="box">
        <div class="box-header">
            <h5 class="box-title">Publisher Form</h5>
        </div>
        <div class="box-body">
            <form class="ti-custom-validation" novalidate>
                <div class="grid lg:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="ti-form-label mb-0">First Name</label>
                        <input type="text" class="firstName my-auto ti-form-input" placeholder="Firstname" value="John mark"  required>
                        <span class="firstNameError text-red-500 text-xs hidden">error</span>
                    </div>
                    <div class="space-y-2">
                        <label class="ti-form-label mb-0">Last Name</label>
                        <input type="text" class="lastName my-auto ti-form-input" placeholder="Lastname" required>
                        <span class="lastNameError text-red-500 text-xs hidden">error</span>
                    </div>
                    <div class="space-y-2">
                        <label class="ti-form-label mb-0">Phone Number</label>
                        <input type="number" class="phonenumber my-auto ti-form-input" placeholder="+91 123-456-789" required>
                        <span class="phoneError text-red-500 text-xs hidden">error</span>
                    </div>
                    <div class="space-y-2">
                        <label class="ti-form-label mb-0">Email Address</label>
                        <input type="email" class="email-address my-auto ti-form-input" placeholder="your@site.com" required>
                        <span class="emailError text-red-500 text-xs hidden">error</span>
                    </div>
                    <div class="space-y-2">
                        <label class="ti-form-label mb-0">Password</label>
                        <input type="password" class="password ti-form-input" placeholder="password" required>
                        <span class="passwordError text-red-500 text-xs hidden">error</span>
                    </div>
                    <div class="space-y-2">
                        <label class="ti-form-label mb-0">Confirm Password</label>
                        <input type="password" class="confirmPassword ti-form-input" placeholder="password" required>
                        <span class="confirmPasswordError text-red-500 text-xs hidden">error</span>
                    </div>
                    <div class="space-y-2">
                        <label class="ti-form-label mb-0">Date Of Birth</label>
                        <input type="date" class="birthdate ti-form-input flatpickr-input" readonly required>
                        <span class="dobError text-red-500 text-xs hidden">error</span>
                    </div>
                    <div class="space-y-2">
                        <label class="ti-form-label mb-0">Gender</label>
                        <ul class="flex flex-col sm:flex-row">
                            <li class="ti-list-group w-full gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                              <div class="relative flex items-start w-full">
                                <div class="flex items-center h-5">
                                  <input id="ti-radio-validation-11" name="ti-radio-validation" type="radio" class="ti-form-radio" checked required>
                                </div>
                                <label for="ti-radio-validation-11" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                 Female
                                </label>
                              </div>
                            </li>

                            <li class="ti-list-group w-full gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                              <div class="relative flex items-start w-full">
                                <div class="flex items-center h-5">
                                  <input id="ti-radio-validation-12" name="ti-radio-validation" type="radio" class="ti-form-radio" required>
                                </div>
                                <label for="ti-radio-validation-12" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                  Male
                                </label>
                              </div>
                            </li>

                            <li class="ti-list-group w-full gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                              <div class="relative flex items-start w-full">
                                <div class="flex items-center h-5">
                                  <input id="ti-radio-validation-13" name="ti-radio-validation" type="radio" class="ti-form-radio" required>
                                </div>
                                <label for="ti-radio-validation-13" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                Others
                                </label>
                              </div>
                            </li>
                          </ul>
                    </div>
                </div>
                <div class="my-5">
                    <div class="space-y-2">
                        <label class="ti-form-label mb-0">Address</label>
                        <input type="text" class="postalAddress my-auto ti-form-input" placeholder="Address" required>
                        <span class="addressError text-red-500 text-xs hidden">error</span>
                    </div>
                </div>
                <div class="grid lg:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="ti-form-label mb-0">City</label>
                        <input type="text" class="cityName my-auto ti-form-input" placeholder="city" required>
                        <span class="cityError text-red-500 text-xs hidden">error</span>
                    </div>
                    <div class="space-y-2">
                        <label class="ti-form-label mb-0">State</label>
                        <input type="text" class="stateName my-auto ti-form-input" placeholder="state" required>
                        <span class="stateError text-red-500 text-xs hidden">error</span>
                    </div>
                    <div class="space-y-2">
                        <label class="ti-form-label mb-0">Pincode</label>
                        <input type="number" class="pincode my-auto ti-form-input" placeholder="pincode" required>
                        <span class="pincodeError text-red-500 text-xs hidden">error</span>
                    </div>
                </div>
                <div class="my-5">
                    <input type="checkbox" class="validationCheckbox ti-form-checkbox mt-0.5" id="hs-checkbox-group-12" required>
                    <span class="checkboxError text-red-500 text-xs hidden">error</span>
                    <label for="hs-checkbox-group-12" class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">I agree with the <a href="javascript:void(0);" class="text-primary hover:underline">terms and conditions</a></label>
                </div>
                <button value="Login Now" type="submit" class="ti-btn ti-btn-primary ti-custom-validate-btn">Submit</button>
            </form>
        </div>
    </div>
</div>
