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
                items-start
                justify-between justify-items-stretch
            "
        >
            <div class="md:w-1/2">
                <div class="flex leading-none">
                    <h2
                        class="
                            text-3.7xl
                            md:text-5xl
                            font-bold
                            text-black
                            font-display
                            px-2
                            mr-2
                        "
                    >
                        HAVE A
                    </h2>
                    <div class="relative overflow-hidden w-6/12 md:ml-2">
                        <h2
                            class="
                                text-3.7xl
                                md:text-5xl
                                font-bold
                                text-red-600
                                font-display
                                transition
                                duration-700
                                absolute
                                md:motion-safe:animate-slide
                            "
                        >
                            CRAPPY<br />
                            HOSTILE<br />
                            RACIST<br />
                            SEXIST<br />
                            UNFAIR<br />
                            ABUSIVE<br />
                            TERRIBLE<br />
                            SHADY<br />
                            CRAPPY
                        </h2>
                    </div>
                </div>
                <h2
                    class="
                        text-3.7xl
                        md:text-5xl
                        mb-2
                        px-2
                        font-semibold
                        text-black
                        mt-2
                        md:mt-3
                        leading-none
                        font-display
                    "
                >
                    WORKPLACE?
                </h2>
                <h3
                    class="
                        text-3.3xl
                        md:text-4xl
                        mb-2
                        mt-3
                        p-2
                        pt-4
                        pb-5
                        pt-0.5
                        font-medium
                        text-white
                        bg-black
                        font-display
                        inline-block
                        leading-thin
                    "
                >
                    GET JUSTICE AND
                </h3>
                <br />
                <h3
                    class="
                        text-3.3xl
                        md:text-4xl
                        mb-3
                        p-2
                        pt-4
                        pb-5
                        pt-0.5
                        font-medium
                        text-white
                        bg-black
                        font-display
                        inline-block
                        leading-thin
                    "
                >
                    COMPENSATION.
                </h3>
                <h4
                    class="
                        text-lg
                        md:text-xl
                        mb-2
                        font-bold font-display
                        px-2
                        md:px-0
                    "
                >
                    Fired, quit, or still working?
                </h4>
                <h4
                    class="
                        text-lg
                        md:text-xl
                        mb-2
                        font-bold font-display
                        leading-thin
                        px-2
                        md:px-0
                    "
                >
                    Doesn't matter.
                </h4>
                <p
                    class="
                        text-lg
                        md:text-xl
                        font-light font-display
                        mt-4
                        mb-4
                        px-2
                        md:px-0 md:w-3/4
                    "
                >
                    Current or past hostility, discrimination, and/or harassment
                    from co-workers, managers, and owners is illegal.
                </p>
                <h2
                    class="
                        text-white
                        inline-block
                        text-3.5xl
                        md:text-4xl
                        bg-black
                        font-bold font-display
                        px-3
                        mt-6
                        md:mt-10
                        w-48
                        md:w-58
                    "
                >
                    $86,250
                </h2>
                <h3
                    class="
                        text-black text-3xl
                        md:text-3.5xl
                        px-2
                        md:px-0
                        font-normal font-display
                        leading-none
                        mt-4
                        md:mt-2
                        mb-20
                        md:w-3/4
                    "
                >
                    This is the average amount we collect per client like you.
                </h3>
            </div>
            <div class="md:w-1/2">
                <div
                    class="
                        relative
                        flex flex-col
                        min-w-0
                        break-words
                        mb-6
                        float-right
                        bg-black
                        md:w-78
                    "
                >
                    <div class="flex-auto p-5 lg:p-6">
                        <div class="items-baseline">
                            <span
                                class="
                                    text-4.5xl
                                    font-bold font-display
                                    text-red-600
                                    md:leading-none
                                "
                            >
                                HOW MUCH
                            </span>
                            <span
                                class="
                                    text-3.2xl
                                    font-bold font-display
                                    text-white
                                    leading-none
                                    uppercase
                                "
                            >
                                are you owed?
                            </span>
                        </div>
                        <h4
                            class="
                                text-3xl
                                md:text-3.2xl
                                text-white
                                mt-6
                                md:mt-3
                                font-display font-light
                            "
                        >
                            Find out now. It's instant and free.
                        </h4>
                        <div class="relative w-full mb-3 mt-4">
                            <label
                                class="
                                    text-white text-sm
                                    font-light
                                    mb-2
                                    font-robert
                                "
                                for="full_name"
                                >Your Name:</label
                            ><input
                                type="text"
                                name="full_name"
                                class="
                                    border-0
                                    px-3
                                    mt-1
                                    py-3
                                    bg-white
                                    h-13
                                    focus:outline-none focus:ring
                                    w-full
                                "
                                placeholder="First and Last Name"
                                style="transition: all 0.15s ease 0s"
                                v-model="full_name"
                            />
                            <span
                                v-if="error.full_name"
                                class="text-red-600 font-robert"
                                >{{ error.full_name }}</span
                            >
                        </div>
                        <div class="relative w-full mb-3">
                            <label
                                class="
                                    text-white text-sm
                                    font-light
                                    mb-2
                                    font-robert
                                "
                                for="email"
                                >Email Address:</label
                            ><input
                                type="email"
                                name="email"
                                class="
                                    border-0
                                    px-3
                                    mt-1
                                    py-3
                                    h-13
                                    text-sm
                                    focus:outline-none focus:ring
                                    w-full
                                "
                                placeholder="example@email.com"
                                style="transition: all 0.15s ease 0s"
                                v-model="email"
                            />
                            <span
                                v-if="error.email"
                                class="text-red-600 font-robert"
                                >{{ error.email }}</span
                            >
                        </div>
                        <div class="relative w-full mb-3">
                            <label
                                class="
                                    text-white text-sm
                                    font-light
                                    mb-2
                                    mt-1
                                    font-robert
                                "
                                for="mobile"
                                >Mobile phone:</label
                            ><input
                                type="text"
                                name="mobile"
                                class="
                                    border-0
                                    px-3
                                    py-3
                                    mt-1
                                    h-13
                                    bg-white
                                    text-sm
                                    focus:outline-none focus:ring
                                    w-full
                                "
                                placeholder="(310) 555-1212"
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
                        <div class="relative w-full mb-3">
                            <label
                                class="
                                    text-white text-sm
                                    font-light
                                    mb-2
                                    font-robert
                                "
                                for="violations"
                                >Select workplace violations you've
                                suffered:</label
                            >
                            <select
                                class="
                                    border-0
                                    px-3
                                    mt-1
                                    py-3
                                    bg-white
                                    h-13
                                    text-sm
                                    focus:outline-none focus:ring
                                    w-full
                                "
                                v-model="violations"
                            >
                                <option disabled value="">
                                    Select option(s)
                                </option>
                                <option>
                                    Discrimination (race, sex, age, gender)
                                </option>
                                <option>Overtime abuse</option>
                                <option>Sexual harassment</option>
                                <option>Health discrimination</option>
                                <option>Contractor misclassification</option>
                                <option>Other</option>
                            </select>
                            <span
                                v-if="error.violations"
                                class="text-red-600 font-robert"
                                >{{ error.violations }}</span
                            >
                        </div>
                        <div class="text-center mt-6">
                            <button
                                @click.prevent="next()"
                                class="
                                    bg-red-600
                                    text-white
                                    active:bg-gray-700
                                    text-2xl
                                    md:text-3xl
                                    font-bold font-display
                                    uppercase
                                    px-6
                                    py-3
                                    mr-1
                                    my-3
                                    mb-5
                                    w-full
                                "
                                type="button"
                                style="transition: all 0.15s ease 0s"
                            >
                                FIND OUT
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

    emits: ['onSubmit'],

    data() {
        return {
            full_name: "",
            email: "",
            mobile: "",
            violations: "",
            error: {},
            isValidateAble: false,
        };
    },
    methods: {
        validateForm() {
            let flag = true;
            this.error = {};
            if (!this.full_name) {
                this.error.full_name = "The Name required";
                flag = false;
            }
            if (!this.violations) {
                this.error.violations = "This filed required";
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

            this.isValidateAble = true;
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

        next() {
            if (this.validateForm()) {
                // this.step++;
                this.isValidateAble = false;

                this.$emit("onSubmit", {
                    full_name: this.full_name,
                    email: this.email,
                    mobile: this.mobile,
                    violations: this.violations,
                });

                axios.post('/request', {
                    step: 1,
                    full_name: this.full_name,
                    email: this.email,
                    mobile: this.mobile,
                    violations: this.violations,
                });

                try {
                    fbq('track', 'Lead');
                } catch (e) {
                }
            }
        },
    },
    watch: {
        email(value) {
            if (this.isValidateAble) {
                this.validateForm();
            }
        },
        full_name(value) {
            if (this.isValidateAble) {
                this.validateForm();
            }
        },
        mobile(value) {
            if (this.isValidateAble) {
                this.validateForm();
            }
        },
        violations(value) {
            if (this.isValidateAble) {
                this.validateForm();
            }
        },
    },
};
</script>
