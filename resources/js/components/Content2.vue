<template>
    <div class="relative pb-16 flex items-center justify-center">
        <img
            src="/images/banner.png"
            class="
                absolute
                top-1/2
                left-1/2
                -translate-x-1/2 -translate-y-1/2
                w-3/4
                h-auto
                -mt-50
                md:mt-24
                -z-1
            "
        />
        <div
            class="
                container
                flex flex-wrap
                items-center
                justify-between
                items-stretch
            "
        >
            <div class="w-full md:w-1/2">
                <div
                    v-show="step === 1"
                    class="
                        relative
                        flex flex-col
                        min-w-0
                        break-words
                        mb-6
                        md:mb-0
                        bg-black
                    "
                >
                    <div class="flex-auto p-4 md:p-8">
                        <h2
                            class="
                                text-3.8xl
                                font-bold font-display
                                text-red-600
                                uppercase
                                mt-4
                                md:mt-0
                                leading-none
                                md:leading-thin
                            "
                        >
                            what could your case
                        </h2>
                        <h2
                            class="
                                text-3.8xl
                                font-bold font-display
                                text-white
                                uppercase
                                leading-none
                                md:leading-normal
                            "
                        >
                            be worth?
                        </h2>
                        <h4
                            class="
                                text-3xl
                                md:text-3.2xl
                                text-white
                                leading-none
                                my-8
                                md:my-0
                                font-display font-thin
                            "
                        >
                            Step 1/3
                        </h4>
                        <div class="relative w-full mb-2 mt-5 hidden md:block">
                            <label
                                class="
                                    text-white text-sm
                                    font-light
                                    mb-2
                                    font-robert
                                "
                                for="currency"
                                >Approximately, what is your current annual
                                compensation?</label
                            ><input
                                type="text"
                                name="annual"
                                class="
                                    border-0
                                    px-4
                                    py-3
                                    bg-white
                                    text-sm
                                    mt-1
                                    focus:outline-none focus:ring
                                    w-full
                                "
                                v-model="annual_compensation"
                                @blur="formattedValue"
                                placeholder="Input here"
                                style="transition: all 0.15s ease 0s"
                            />
                        </div>
                        <div class="relative w-full mb-5">
                            <label
                                class="
                                    text-white text-xss
                                    md:text-sm
                                    font-light
                                    mb-2
                                    font-robert
                                "
                                for="full-name"
                                >Do you feel your workplace is hostile?</label
                            >
                            <div class="control mt-1">
                                <label class="radio text-white mr-20">
                                    <input
                                        type="radio"
                                        name="workplace_hostile"
                                        value="Yes"
                                        v-model="workplace_hostile"
                                    />
                                    Yes
                                </label>
                                <label class="radio text-white">
                                    <input
                                        type="radio"
                                        name="workplace_hostile"
                                        value="No"
                                        v-model="workplace_hostile"
                                    />
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="relative w-full mb-10">
                            <label
                                class="
                                    text-white text-xss
                                    md:text-sm
                                    font-light
                                    mb-2
                                    font-robert
                                "
                                for="full-name"
                                >Do you feel your workplace has discriminated
                                against or harrassed you for any of the
                                following: Your race/ethnicity, sexual
                                orientation, gender, age, medical conditions,
                                mental conditions, or any other reason?</label
                            >
                            <div class="control mt-1">
                                <label class="radio text-white mr-20">
                                    <input
                                        type="radio"
                                        name="workplace_discriminated"
                                        value="Yes"
                                        v-model="workplace_discriminated"
                                    />
                                    Yes
                                </label>
                                <label class="radio text-white">
                                    <input
                                        type="radio"
                                        name="workplace_discriminated"
                                        value="No"
                                        v-model="workplace_discriminated"
                                    />
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="flex flex-wrap md:-m-4">
                            <div
                                class="
                                    relative
                                    w-full
                                    md:w-1/2 md:p-4
                                    mb-6
                                    md:mb-0
                                "
                            >
                                <label
                                    class="
                                        text-white text-xss
                                        md:text-sm
                                        font-light
                                        mb-2
                                        font-robert
                                    "
                                    for="first_name"
                                    >Your first name</label
                                ><input
                                    type="text"
                                    class="
                                        border-0
                                        px-3
                                        py-3
                                        placeholder-gray-400
                                        text-gray-700
                                        bg-white
                                        text-sm
                                        w-full
                                        mt-1
                                    "
                                    placeholder="Input here"
                                    style="transition: all 0.15s ease 0s"
                                    v-model="first_name"
                                />
                                <span
                                    v-if="error.first_name"
                                    class="text-red-600 font-robert"
                                    >{{ error.first_name }}</span
                                >
                            </div>
                            <div
                                class="
                                    relative
                                    w-full
                                    md:w-1/2 md:p-4
                                    mb-6
                                    md:mb-0
                                "
                            >
                                <label
                                    class="
                                        text-white text-xss
                                        md:text-sm
                                        font-light
                                        mb-2
                                        font-robert
                                    "
                                    for="last_name"
                                    >Your last name (Optional)</label
                                ><input
                                    type="text"
                                    class="
                                        border-0
                                        px-3
                                        py-3
                                        placeholder-gray-400
                                        text-gray-700
                                        bg-white
                                        text-sm
                                        w-full
                                        mt-1
                                    "
                                    placeholder="Input here"
                                    style="transition: all 0.15s ease 0s"
                                    v-model="last_name"
                                />
                                <span
                                    v-if="error.last_name"
                                    class="text-red-600 font-robert"
                                    >{{ error.last_name }}</span
                                >
                            </div>
                            <div
                                class="
                                    relative
                                    w-full
                                    md:w-1/2 md:p-4
                                    mb-6
                                    md:mb-0
                                "
                            >
                                <label
                                    class="
                                        text-white text-xss
                                        md:text-sm
                                        font-light
                                        mb-2
                                        font-robert
                                    "
                                    for="email"
                                    >Your email address</label
                                ><input
                                    type="email"
                                    class="
                                        border-0
                                        px-3
                                        py-3
                                        placeholder-gray-400
                                        text-gray-700
                                        bg-white
                                        text-sm
                                        w-full
                                        mt-1
                                    "
                                    placeholder="Input here"
                                    style="transition: all 0.15s ease 0s"
                                    v-model="email"
                                />
                                <span
                                    v-if="error.email"
                                    class="text-red-600 font-robert"
                                    >{{ error.email }}</span
                                >
                            </div>
                            <div
                                class="
                                    relative
                                    w-full
                                    md:w-1/2 md:p-4
                                    mb-6
                                    md:mb-0
                                "
                            >
                                <label
                                    class="
                                        text-white text-xss
                                        md:text-sm
                                        font-light
                                        mb-2
                                        font-robert
                                    "
                                    for="last_name"
                                    >Your mobile phone number</label
                                ><input
                                    type="text"
                                    class="
                                        border-0
                                        px-3
                                        py-3
                                        placeholder-gray-400
                                        text-gray-700
                                        bg-white
                                        text-sm
                                        w-full
                                        mt-1
                                    "
                                    placeholder="Input here"
                                    style="transition: all 0.15s ease 0s"
                                    v-model="mobile"
                                    @input="acceptNumber"
                                />
                                <span
                                    v-if="error.mobile"
                                    class="text-red-600 font-robert"
                                    >{{ error.mobile }}</span
                                >
                            </div>
                        </div>
                        <div class="text-center mt-8">
                            <button
                                @click.prevent="next()"
                                class="
                                    bg-red-600
                                    text-white
                                    active:bg-gray-700
                                    text-3xl
                                    font-bold font-display
                                    uppercase
                                    px-6
                                    py-1
                                    mr-1
                                    mb-1
                                    w-full
                                "
                                type="button"
                                style="transition: all 0.15s ease 0s"
                            >
                                next
                            </button>
                        </div>
                        <p
                            class="
                                text-white
                                font-robert font-light
                                text-xs
                                mt-3
                                text-center
                            "
                        >
                            By clicking “next” above you confirm that you agree
                            with our Privacy Policies and Terms & Conditions. In
                            addition, you are allowing us to contact you using
                            the methods you provide to discuss your case.
                        </p>
                    </div>
                </div>
                <div
                    v-show="step === 2"
                    class="
                        relative
                        flex flex-col
                        min-w-0
                        break-words
                        mb-6
                        bg-black
                    "
                >
                    <div class="flex-auto p-4 md:p-8">
                        <h2
                            class="
                                text-3.8xl
                                font-bold font-display
                                text-red-600
                                mt-4
                                md:mt-0
                                leading-none
                                md:leading-thin
                                uppercase
                            "
                        >
                            what could your case
                        </h2>
                        <h2
                            class="
                                text-3.8xl
                                font-bold font-display
                                text-white
                                uppercase
                                leading-none
                                md:leading-normal
                            "
                        >
                            be worth?
                        </h2>
                        <h4
                            class="
                                text-3xl
                                md:text-3.2xl
                                text-white
                                my-8
                                md:my-0
                                leading-none
                                font-display font-thin
                            "
                        >
                            Step 2/3
                        </h4>
                        <div class="relative w-full mt-5 mb-5">
                            <label
                                class="
                                    text-white text-xss
                                    md:text-sm
                                    font-light
                                    mb-2
                                    font-robert
                                "
                                for="full-name"
                                >Have you heard anyone in your workplace make
                                racist, sexist, or agist workplace_remarks or any other
                                remarks of this nature that you can think
                                of?</label
                            >
                            <div class="control">
                                <label class="radio text-white mr-20">
                                    <input
                                        type="radio"
                                        name="workplace_remarks"
                                        value="Yes"
                                        v-model="workplace_remarks"
                                    />
                                    Yes
                                </label>
                                <label class="radio text-white">
                                    <input
                                        type="radio"
                                        name="workplace_remarks"
                                        value="No"
                                        v-model="workplace_remarks"
                                    />
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="flex flex-wrap md:-m-4 mt-10">
                            <div
                                class="
                                    relative
                                    w-full
                                    md:w-1/2 md:p-4
                                    mb-6
                                    md:mb-0
                                "
                            >
                                <label
                                    class="
                                        text-white text-xss
                                        md:text-sm
                                        font-light
                                        mb-2
                                        font-robert
                                    "
                                    for="described_as"
                                    >I am best described as:</label
                                ><select
                                    class="
                                        border-0
                                        px-3
                                        py-3
                                        placeholder-gray-400
                                        text-gray-700
                                        bg-white
                                        mt-1
                                        focus:outline-none focus:ring
                                        w-full
                                    "
                                    v-model="described_as"
                                >
                                    <option disabled value="">
                                        Select option
                                    </option>
                                    <option value="straight">Straight</option>
                                    <option value="gay">Gay</option>
                                    <option value="sexual">Bi-Sexual</option>
                                    <option value="questioning">
                                        Questioning
                                    </option>
                                    <option value="trains">Trains</option>
                                    <option value="other">Other</option>
                                </select>
                                <span
                                    v-if="error.described_as"
                                    class="text-red-600 font-robert"
                                    >{{ error.described_as }}</span
                                >
                            </div>
                            <div
                                class="
                                    relative
                                    w-full
                                    md:w-1/2 md:p-4
                                    mb-6
                                    md:mb-0
                                "
                            >
                                <label
                                    class="
                                        text-white text-xss
                                        md:text-sm
                                        font-light
                                        mb-2
                                        font-robert
                                    "
                                    for="gender"
                                    >My gender is:</label
                                ><select
                                    class="
                                        border-0
                                        px-3
                                        py-3
                                        placeholder-gray-400
                                        text-gray-700
                                        bg-white
                                        focus:outline-none focus:ring
                                        w-full
                                        mt-1
                                    "
                                    v-model="gender"
                                >
                                    <option disabled value="">
                                        Select option
                                    </option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="transgender">
                                        Transgender
                                    </option>
                                    <option value="questing">
                                        Questioning
                                    </option>
                                    <option value="other">Other</option>
                                </select>
                                <span
                                    v-if="error.gender"
                                    class="text-red-600 font-robert"
                                    >{{ error.gender }}</span
                                >
                            </div>
                            <div
                                class="
                                    relative
                                    w-full
                                    md:w-1/2 md:p-4
                                    mb-6
                                    md:mb-0
                                "
                            >
                                <label
                                    class="
                                        text-white text-xss
                                        md:text-sm
                                        font-light
                                        mb-2
                                        font-robert
                                    "
                                    for="age"
                                    >My age is:</label
                                ><select
                                    class="
                                        border-0
                                        px-3
                                        py-3
                                        placeholder-gray-400
                                        text-gray-700
                                        bg-white
                                        focus:outline-none focus:ring
                                        w-full
                                        mt-1
                                    "
                                    v-model="age"
                                >
                                    <option disabled value="">
                                        Select option
                                    </option>
                                    <option value="18">Under 18</option>
                                    <option value="30">18~30</option>
                                    <option value="39">31~39</option>
                                    <option value="50">40~50</option>
                                    <option value="51">51+</option>
                                </select>
                                <span
                                    v-if="error.age"
                                    class="text-red-600 font-robert"
                                    >{{ error.age }}</span
                                >
                            </div>
                            <div
                                class="
                                    relative
                                    w-full
                                    md:w-1/2 md:p-4
                                    mb-6
                                    md:mb-0
                                "
                            >
                                <label
                                    class="
                                        text-white text-xss
                                        md:text-sm
                                        font-light
                                        mb-2
                                        font-robert
                                    "
                                    for="race"
                                    >My race is</label
                                ><select
                                    class="
                                        border-0
                                        px-3
                                        py-3
                                        placeholder-gray-400
                                        text-gray-700
                                        bg-white
                                        focus:outline-none focus:ring
                                        w-full
                                        mt-1
                                    "
                                    v-model="race"
                                >
                                    <option disabled value="">
                                        Select option
                                    </option>
                                    <option value="caucasian">
                                        Caucasian (white)
                                    </option>
                                    <option value="african">
                                        African American (black)
                                    </option>
                                    <option value="asian">Asian</option>
                                    <option value="latino">Latino</option>
                                    <option value="estern">
                                        Middle Eastern
                                    </option>
                                    <option value="other">Other</option>
                                </select>
                                <span
                                    v-if="error.race"
                                    class="text-red-600 font-robert"
                                    >{{ error.race }}</span
                                >
                            </div>
                        </div>
                        <div class="relative w-full my-10 md:my-20">
                            <label
                                class="
                                    text-white text-xss
                                    md:text-sm
                                    font-light
                                    mb-2
                                    font-robert
                                "
                                for="company_name"
                                >What is the name of your company?
                                (Optional)</label
                            ><input
                                type="text"
                                class="
                                    border-0
                                    px-3
                                    py-3
                                    bg-white
                                    text-sm
                                    focus:outline-none focus:ring
                                    w-full
                                    mt-1
                                "
                                placeholder="Input here"
                                style="transition: all 0.15s ease 0s"
                                v-model="company_name"
                            />
                            <span
                                v-if="error.company_name"
                                class="text-red-600 font-robert"
                                >{{ error.company_name }}</span
                            >
                        </div>
                        <div class="text-center mt-10">
                            <button
                                @click.prevent="next()"
                                class="
                                    bg-red-600
                                    text-white
                                    active:bg-gray-700
                                    text-3xl
                                    font-bold font-display
                                    uppercase
                                    px-6
                                    py-1
                                    mr-1
                                    mb-1
                                    w-full
                                "
                                type="button"
                                style="transition: all 0.15s ease 0s"
                            >
                                next
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    v-show="step === 3"
                    class="
                        relative
                        flex flex-col
                        min-w-0
                        break-words
                        mb-6
                        bg-black
                    "
                >
                    <div class="flex-auto p-4 md:p-8">
                        <h2
                            class="
                                text-3.8xl
                                font-bold font-display
                                mt-4
                                md:mt-0
                                text-red-600
                                uppercase
                                leading-none
                                md:leading-thin
                            "
                        >
                            what could your case
                        </h2>
                        <h2
                            class="
                                text-3.8xl
                                font-bold font-display
                                text-white
                                uppercase
                                leading-none
                                md:leading-normal
                            "
                        >
                            be worth?
                        </h2>
                        <h4
                            class="
                                text-3xl
                                md:text-3.2xl
                                text-white
                                my-8
                                md:my-0
                                leading-none
                                font-display font-thin
                            "
                        >
                            Step 3/3
                        </h4>
                        <div class="relative w-full mb-5 mt-5">
                            <label
                                class="
                                    text-white text-xss
                                    md:text-sm
                                    font-light
                                    mb-2
                                    font-robert
                                "
                                for="full-name"
                                >Do you have any medical conditions that your
                                employer has failed to accomodate you
                                for?</label
                            >
                            <div class="control">
                                <label class="radio text-white mr-20">
                                    <input
                                        type="radio"
                                        name="medical_conditions"
                                        v-model="medical_conditions"
                                        value="Yes"
                                    />
                                    Yes
                                </label>
                                <label class="radio text-white">
                                    <input
                                        type="radio"
                                        name="medical_conditions"
                                        v-model="medical_conditions"
                                        value="No"
                                        checked
                                    />
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="relative w-full my-10 md:my-16">
                            <label
                                class="
                                    text-white text-xss
                                    md:text-sm
                                    font-light
                                    mb-2
                                    font-robert
                                "
                                for="employee_total"
                                >Approximately, how many people does your
                                organization employ?</label
                            ><select
                                class="
                                    border-0
                                    px-3
                                    py-3
                                    placeholder-gray-400
                                    text-gray-700
                                    bg-white
                                    focus:outline-none focus:ring
                                    w-full
                                    mt-1
                                "
                                v-model="employee_total"
                            >
                                <option disabled value="">Select option</option>
                                <option>1-5 employees</option>
                                <option>5-10 employees</option>
                                <option>11-100 employees</option>
                                <option>100+ employees</option>
                            </select>
                            <span
                                v-if="error.employee_total"
                                class="text-red-600 font-robert"
                                >{{ error.employee_total }}</span
                            >
                        </div>
                        <div class="relative w-full my-20">
                            <label
                                class="
                                    text-white text-xss
                                    md:text-sm
                                    font-light
                                    mb-2
                                    font-robert
                                "
                                for="specific_memo"
                                >Please write about any specific incidients you
                                can remember where a manager, boss, owner or
                                coworker was racist, hostile, disciminatory,
                                sexist, unethical, etc. The more details you
                                write the better we can help you.</label
                            ><textarea
                                class="
                                    border-0
                                    px-3
                                    py-3
                                    placeholder-gray-400
                                    text-gray-700
                                    bg-white
                                    focus:outline-none focus:ring
                                    w-full
                                    mt-1
                                "
                                rows="3"
                                data-min-rows="3"
                                placeholder="Write here"
                                v-model="specific_memo"
                            ></textarea>
                            <span
                                v-if="error.specific_memo"
                                class="text-red-600 font-robert"
                                >{{ error.specific_memo }}</span
                            >
                        </div>
                        <div class="text-center mt-10">
                            <button
                                @click.prevent="next()"
                                class="
                                    bg-red-600
                                    text-white
                                    active:bg-gray-700
                                    text-3xl
                                    font-bold font-display
                                    uppercase
                                    px-6
                                    py-1
                                    mr-1
                                    mb-1
                                    w-full
                                "
                                type="button"
                                style="transition: all 0.15s ease 0s"
                            >
                                finish
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    v-show="step === 4"
                    class="
                        relative
                        flex flex-col
                        min-w-0
                        break-words
                        mb-6
                        bg-black
                    "
                >
                    <div class="flex-auto p-4 lg:p-8">
                        <h2
                            class="
                                text-3.8xl
                                font-bold font-display
                                mt-4
                                md:mt-0
                                text-red-600
                                uppercase
                                leading-none
                                md:leading-thin
                            "
                        >
                            EStimation
                        </h2>
                        <h2
                            class="
                                text-3.8xl
                                font-bold font-display
                                text-red-600
                                uppercase
                                leading-none
                                md:leading-normal
                            "
                        >
                            complete.
                        </h2>
                        <h4
                            class="
                                my-10
                                md:my-12
                                text-3xl
                                w-full
                                md:w-4/5 md:text-3.2xl
                                text-white
                                font-display font-light
                            "
                        >
                            We will reach out to you shortly to discuss your
                            case.
                        </h4>
                        <div class="relative w-full mb-5">
                            <label
                                class="
                                    text-white text-xss
                                    md:text-sm
                                    font-light
                                    mb-2
                                    leading-loose
                                    font-robert
                                "
                                for="full-name"
                                >What’s your preferred method of communication
                                from us?</label
                            >
                            <div class="control">
                                <label
                                    class="radio text-white float-left w-full"
                                >
                                    <input
                                        type="radio"
                                        name="commnication"
                                        value="anytime"
                                        v-model='preferred_method'
                                    />
                                    Call me, any time.
                                </label>
                                <label
                                    class="radio text-white float-left w-full"
                                >
                                    <input
                                        type="radio"
                                        name="commnication"
                                        value="zoom_appt"
                                        v-model='preferred_method'
                                    />
                                    Set an appointment to talk by phone
                                </label>
                                <label
                                    class="radio text-white float-left w-full"
                                >
                                    <input
                                        type="radio"
                                        name="commnication"
                                        value="phone_appt"
                                        v-model='preferred_method'
                                    />
                                    Set an appointment to talk by Zoom
                                </label>
                            </div>
                        </div>
                        <div class="text-center mt-32 mb-56">
                            <button
                                @click.prevent="next()"
                                class="
                                    bg-red-600
                                    text-white
                                    active:bg-gray-700
                                    text-3xl
                                    font-bold font-display
                                    uppercase
                                    px-6
                                    py-1
                                    mr-1
                                    mb-1
                                    w-full
                                "
                                type="button"
                                style="transition: all 0.15s ease 0s"
                            >
                                finish
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    v-show="step === 5"
                    class="
                        relative
                        flex flex-col
                        min-w-0
                        break-words
                        mb-6
                        bg-black
                    "
                >
                    <div class="flex-auto p-4 lg:p-8">
                        <h2
                            class="
                                text-3.8xl
                                font-bold font-display
                                mt-4
                                md:mt-0
                                text-red-600
                                uppercase
                                leading-none
                                md:leading-thin
                            "
                        >
                            EStimation
                        </h2>
                        <h2
                            class="
                                text-3.8xl
                                font-bold font-display
                                text-red-600
                                uppercase
                                leading-none
                                md:leading-normal
                            "
                        >
                            complete.
                        </h2>
                        <h4
                            class="
                                my-10
                                md:my-12
                                text-3xl
                                w-full
                                md:w-4/5 md:text-3.2xl
                                text-white
                                font-display font-light
                            "
                        >
                            We will reach out to you shortly to discuss your
                            case.
                        </h4>
                        <div class="relative w-full my-48">
                            <h2
                                class="
                                    text-3.8xl
                                    font-bold font-display
                                    text-white text-center
                                "
                            >
                                Thank you !
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 md:pl-12">
                <div
                    class="
                        relative
                        flex flex-col flex-auto
                        min-w-0
                        break-words
                        px-2
                        md:px-20
                        pt-10
                        md:pt-38
                        pb-5
                        md:pb-6
                        text-center
                        mb-6
                        float-right
                        bg-red-600
                        h-full
                        items-center
                        justify-center
                    "
                >
                    <h2
                        class="
                            text-3.8xl
                            font-semibold
                            text-white
                            font-display
                            mr-2
                            leading-none
                            uppercase
                        "
                    >
                        your case may be worth:
                    </h2>

                    <h2
                        class="
                            text-white
                            w-full
                            md:w-68 md:h-32
                            text-4xl
                            md:text-4.5xl
                            bg-black
                            font-bold font-display
                            leading-none
                            py-6
                            md:py-8
                            my-10
                            m-auto
                        "
                    >
                        {{ formattedCurrency(price) }}
                    </h2>
                    <h3
                        class="
                            text-white text-3xl
                            md:text-3.2xl
                            font-light
                            leading-snug
                            font-display
                        "
                    >
                        Amount updates based on how questions are answered on
                        the left.
                    </h3>
                    <p
                        class="
                            text-white text-center
                            md:text-left
                            font-robert
                            text-xss
                            md:absolute
                            bottom-5.5
                            w-full
                            mt-20
                            md:mt-0 md:pl-8
                        "
                    >
                        This is a computer generated estimate based around an
                        average settlement amount for previous cases that are
                        similar to yours but every case is different. This is
                        not a promise or guarantee, only a general guideline.
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

    emits: ['onSubmit'],

    props: {
        formData: {
            type: Object,
            required: false,
        },
    },
    data() {
        return {
            step: 1,
            first_name: this.formData.full_name
                ? this.formData.full_name.split(" ")[0]
                : "",
            last_name: this.formData.full_name
                ? this.formData.full_name.split(" ")[1]
                : "",
            email: this.formData.email ? this.formData.email : "",
            mobile: this.formData.mobile ? this.formData.mobile : "",
            described_as: "",
            age: "",
            race: "",
            gender: "",
            company_name: "",
            medical_conditions: "",
            specific_memo: "",
            employee_total: "",
            price: 45000,
            workplace_hostile: "",
            workplace_discriminated: "",
            workplace_remarks: "",
            annual_compensation: "",
            preferred_method: "",
            error: {},
        }
    },
    methods: {
        validateForm() {
            let flag = true;
            this.error = {};
            if (this.step == 1) {
                if (!this.first_name) {
                    this.error.first_name = "First Name required";
                    flag = false;
                }
                if (!this.last_name) {
                    this.error.last_name = "Last Name required";
                    flag = false;
                }
                if (!this.email) {
                    this.error.email = "Email required";
                    flag = false;
                } else if (
                    !String(this.email)
                        .toLowerCase()
                        .match(
                            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                        )
                ) {
                    this.error.email = "Email format not match";
                    flag = false;
                }
                if (!this.mobile) {
                    this.error.mobile = "Mobile required";
                    flag = false;
                }
            } else if (this.step == 2) {
                if (!this.described_as) {
                    this.error.described_as = "described_as required";
                    flag = false;
                }
                if (!this.gender) {
                    this.error.gender = "Gender required";
                    flag = false;
                }
                if (!this.age) {
                    this.error.age = "Age required";
                    flag = false;
                }
                if (!this.race) {
                    this.error.race = "Race required";
                    flag = false;
                }
                if (!this.company_name) {
                    this.error.company_name = "Company Name required";
                    flag = false;
                }
            } else if (this.step == 3) {
                if (!this.specific_memo) {
                    this.error.specific_memo = "This field required";
                    flag = false;
                }
                if (!this.employee_total) {
                    this.error.employee_total = "This field required";
                    flag = false;
                }
            }
            return flag;
        },
        acceptNumber() {
            var x = this.mobile
                .replace(/\D/g, "")
                .match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
            this.mobile = !x[2]
                ? x[1]
                : "(" + x[1] + ") " + x[2] + (x[3] ? "-" + x[3] : "");
        },

        formattedValue() {
            let regex = /[^\d^.]/g;
            let num = this.annual_compensation.replace(regex, "");
            let cur_re = /\D*(\d+|\d.*?\d)(?:\D+(\d{2,}))?\D*$/;
            let parts = cur_re.exec(num);
            let part1 = parts[1] === undefined || parts[1] === null ? "00" : parts[1];
            let part2 = parts[2] === undefined || parts[2] === null ? "00" : parts[2].substring(2, 0);
            let number = `${part1}.${part2}`;
            let currencyOpts = { style: "currency", currency: "USD" };
            let numberFormat1 = Intl.NumberFormat("en-US", currencyOpts);
            num = numberFormat1.format(number);
            this.annual_compensation = num;
        },
        formattedCurrency(amount) {
            return amount
                .toLocaleString("en-US", {
                    style: "currency",
                    currency: "USD",
                })
                .split(".")[0];
        },

        next() {
            if (this.validateForm()) {

                axios.post('/request', {
                    step: (this.step + 1),
                    first_name: this.first_name,
                    last_name: this.last_name,
                    email: this.email,
                    mobile: this.mobile,
                    described_as: this.described_as,
                    age: this.age,
                    race: this.race,
                    gender: this.gender,
                    company_name: this.company_name,
                    medical_conditions: this.medical_conditions,
                    specific_memo: this.specific_memo,
                    employee_total: this.employee_total,
                    price: this.price,
                    workplace_hostile: this.workplace_hostile,
                    workplace_discriminated: this.workplace_discriminated,
                    workplace_remarks: this.workplace_remarks,
                    annual_compensation: this.annual_compensation,
                    preferred_method: this.preferred_method,
                })
                .catch(e => {});

                if (this.step === 1) {
                    try {
                        fbq('track', 'Lead');
                    } catch (e) {
                    }
                }

                this.step++;
            }
        },
        calcPrice() {
            if (this.workplace_discriminated === "No" && this.workplace_hostile === "No") {
                this.price = 35000;
            } else if (this.workplace_hostile === "Yes") {
                this.price = 49500;
            } else if (this.workplace_discriminated === "Yes" && this.workplace_hostile === "No") {
                this.price = 45000;
            } else if (this.workplace_hostile === "No" && this.workplace_discriminated === "") {
                this.price = 45000;
            }

            if (this.workplace_remarks === "Yes") {
                this.price = this.price + (this.price * 25) / 100;
            }

            if (this.described_as !== "" && this.described_as !== "straight") {
                this.price = this.price + (this.price * 20) / 100;
            }
            if (this.age > 40) {
                this.price = this.price + (this.price * 20) / 100;
            }

            if (this.race !== "" && this.race !== "caucasian") {
                this.price = this.price + (this.price * 20) / 100;
            }
        },
    },
    watch: {
        workplace_hostile(val) {
            this.calcPrice();
        },
        workplace_discriminated(val) {
            this.calcPrice();
        },
        workplace_remarks(val) {
            this.calcPrice();
        },
        described_as(val) {
            this.calcPrice();
        },
        age(val) {
            this.calcPrice();
        },
        race(val) {
            this.calcPrice();
        },
    },
};
</script>
