<template>
    <footer class="relative bg-[#EEEEEE] pt-12">
        <div
            class="
                container
                mx-auto mx-auto
                md:flex md:justify-between md:items-center
            "
        >
            <div class="flex flex-wrap">
                <div class="w-full">
                    <div class="flex flex-wrap items-top mb-12">
                        <div class="w-full lg:w-4/12 px-3 mb-8 md:mb-0">
                            <img
                                alt="..."
                                src="/images/f-logo.png"
                                class="mb-2"
                            />
                            <ul class="list-unstyled mt-5">
                                <li>
                                    <a
                                        class="
                                            font-medium font-display
                                            uppercase
                                            text-lg
                                        "
                                        href=""
                                        >What's your case worth?</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="
                                            font-medium
                                            text-red-600
                                            font-display
                                            text-lg
                                        "
                                        href="tel:+18885941532"
                                        >(888) 594-1532</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="
                                            font-normal font-display
                                            text-base
                                        "
                                        href=""
                                        >2219 Main St, Unit #120</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="
                                            font-normal font-display
                                            text-base
                                        "
                                        href=""
                                        >Santa Monica, CA 90405</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-1/5 px-3">
                            <span
                                class="
                                    uppercase
                                    font-bold font-display
                                    text-2xl
                                    mb-2
                                "
                                >ABOUT:</span
                            >
                            <ul class="list-unstyled">
                                <li>
                                    <a
                                        class="
                                            font-normal font-display
                                            text-2xl
                                        "
                                        href="#process"
                                        >What's the process?</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="
                                            font-normal font-display
                                            text-2xl
                                        "
                                        href="#workplace"
                                        >Workplace Issues</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="
                                            font-normal font-display
                                            text-2xl
                                        "
                                        href=""
                                        @click.prevent="next()"
                                        >Take the test</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="
                                            font-normal font-display
                                            text-2xl
                                        "
                                        href=""
                                        >Zoom with us</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="
                                            font-normal font-display
                                            text-2xl
                                        "
                                        href="#faq"
                                        >Faq</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-3/12 px-3">
                            <span
                                class="
                                    uppercase
                                    font-bold font-display
                                    text-2xl
                                    mb-2
                                "
                                >VIOLATION TYPES:</span
                            >
                            <ul class="list-unstyled">
                                <li>
                                    <a
                                        class="
                                            font-normal font-display
                                            text-2xl
                                        "
                                        href=""
                                        >Overtime abuse</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="
                                            font-normal font-display
                                            text-2xl
                                        "
                                        href=""
                                        >Race, Sex, Age Discrimination</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="
                                            font-normal font-display
                                            text-2xl
                                        "
                                        href=""
                                        >Sexual Harassment</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="
                                            font-normal font-display
                                            text-2xl
                                        "
                                        href=""
                                        >Health Discremination</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="
                                            font-normal font-display
                                            text-2xl
                                        "
                                        href=""
                                        >Misclassification</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="
                                            font-normal font-display
                                            text-2xl
                                        "
                                        href=""
                                        >Whistleblowers</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-3/12 px-3 my-6 md:my-0">
                            <span
                                class="
                                    uppercase
                                    font-bold font-display
                                    text-2xl
                                    mb-2
                                "
                                >How much are you owed?</span
                            >
                            <ul class="list-unstyled">
                                <li class="w-4/5 md:w-full">
                                    <a
                                        class="
                                            font-normal font-display
                                            text-2xl
                                            mb-2
                                        "
                                        href=""
                                        >With a few questions we can tell you if
                                        you might have a case.</a
                                    >
                                </li>
                                <li>
                                    <button
                                        class="
                                            bg-red-600
                                            text-white text-sm
                                            font-bold
                                            uppercase
                                            text-base
                                            md:text-lg
                                            uppercase
                                            font-display
                                            px-6
                                            py-3
                                            mt-3
                                        "
                                        type="button"
                                        style="transition: all 0.15s ease 0s"
                                    >
                                        Set Free zoom Appointment
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="border-t py-4 md:py-1 bg-[#161616]">
        <div class="container px-2 md:px-2 mx-auto">
            <div class="md:flex md:-mx-4 md:items-center">
                <div class="md:flex-1 md:px-4 md:text-left">
                    <p class="text-white text-xs font-robert">
                        © 2019 StopWorkplaceHostility.com
                    </p>
                </div>
                <div
                    class="
                        md:flex-1 md:px-4 md:text-center
                        text-left
                        md:text-right
                    "
                >
                    <a
                        href="#"
                        class="
                            py-2
                            md:px-4
                            text-white
                            inline-block
                            text-xs
                            font-robert
                            hover:underline
                        "
                        >Terms of Service - Privacy Policy</a
                    >
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            date: new Date().getFullYear(),
        };
    },
    methods: {
        next() {
            this.$emit("onSubmit", {});
        },
    },
};
</script>
