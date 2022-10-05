<template>
    <div>
        <nav class="pb-8 pt-6">
            <div
                class="
                    container
                    mx-auto
                    md:flex md:justify-between md:items-center
                "
            >
                <div class="flex justify-between justify-items-start">
                    <div class="md:flex">
                        <router-link
                            to="/"
                            class="
                                md:text-xl
                                font-bold
                                text-gray-100
                                md:text-2xl
                                px-2
                                md:px-0
                                hover:text-indigo-400
                            "
                            ><img
                                alt="..."
                                src="/images/logo.png"
                                class="
                                    align-middle
                                    w-40
                                    md:w-64
                                    h-6
                                    md:h-10
                                    inline-block
                                "
                            />
                        </router-link>
                        <div
                            class="
                                my-2
                                md:my-0
                                mx-2
                                md:mx-4
                                w-12
                                md:w-auto
                                text-red-600
                                border-r-default border-t-2
                            "
                        ></div>
                        <div>
                            <h3
                                class="
                                    font-medium
                                    uppercase
                                    text-black
                                    font-display
                                    ml-2
                                    md:ml-auto
                                    text-sm
                                    md:text-lg
                                    leading-none
                                "
                            >
                                what's your case worth?
                            </h3>
                            <h3
                                class="
                                    font-medium
                                    uppercase
                                    text-red-600
                                    font-display
                                    ml-2
                                    md:ml-auto
                                    text-sm
                                    md:text-lg
                                "
                            >
                                <a href="tel:+18885941532">(888) 594-1532</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Mobile menu button -->
                    <div @click="toggleNav" class="flex md:hidden pr-4">
                        <button
                            type="button"
                            class="
                                text-gray-100
                                hover:text-gray-400
                                focus:outline-none focus:text-gray-400
                                -mt-13
                            "
                        >
                            <svg
                                width="18"
                                height="14"
                                viewBox="0 0 18 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M1 13H17M1 1H17H1ZM1 7H17H1Z"
                                    stroke="#C51111"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div
                    class="
                        px-4
                        py-8
                        fixed
                        inset-0
                        z-50
                        bg-[#000000]
                        opacity-90
                        flex-col
                    "
                    :class="showMenu ? 'flex' : 'hidden'"
                >
                    <div class="flex justify-between">
                        <img
                            alt="..."
                            src="/images/m-logi.png"
                            class="w-40 h-6"
                        />
                        <button
                            type="button"
                            class="
                                text-gray-100
                                hover:text-gray-400
                                focus:outline-none focus:text-gray-400
                            "
                            @click="toggleNav"
                        >
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M1 1L13 13M1 13L13 1L1 13Z"
                                    stroke="white"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </button>
                    </div>
                    <ul
                        class="
                            flex-col
                            mt-8
                            space-y-4
                            md:flex
                            md:space-y-0
                            md:flex-row
                            md:items-center
                            md:space-x-10
                            md:mt-0
                        "
                    >
                        <li
                            class="
                                font-medium
                                leading-loose
                                text-3xl text-white
                                md:text-black
                                font-display
                            "
                        >
                            <a href="#process">WHAT'S THE PROCESS?</a>
                        </li>
                        <li
                            class="
                                font-medium
                                leading-loose
                                text-3xl text-white
                                md:text-black
                                font-display
                            "
                        >
                            WORKPLACE ISSUES
                        </li>
                        <li
                            class="
                                font-medium
                                leading-loose
                                text-3xl text-red-600
                                font-display
                            "
                        >
                            <a href="#" @click.prevent="next()">TAKE THE TEST</a>
                        </li>
                        <li
                            class="
                                font-medium
                                leading-loose
                                text-3xl text-white
                                md:text-black
                                font-display
                            "
                        >
                            ZOOM WITH US
                        </li>
                        <li
                            class="
                                font-medium
                                leading-loose
                                text-3xl text-white
                                md:text-black
                                font-display
                            "
                        >
                            <a href="#faq">FAQ</a>
                        </li>
                    </ul>

                    <div class="mt-auto">
                        <h3
                            class="
                                font-semibold
                                text-2xl
                                uppercase
                                text-white
                                font-display
                            "
                        >
                            what's your case worth?
                        </h3>
                        <h3
                            class="
                                font-semibold
                                text-2xl
                                uppercase
                                text-red-600
                                font-display
                            "
                        >
                            (888) 888-8888
                        </h3>
                    </div>
                </div>
                <ul
                    class="
                        hidden
                        flex-col
                        mt-8
                        space-y-4
                        md:flex
                        md:space-y-0
                        md:flex-row
                        md:items-center
                        md:space-x-6
                        md:mt-0
                    "
                >
                    <li class="font-semibold text-black font-display">
                        <a href="#process">WHAT'S THE PROCESS?</a>
                    </li>
                    <li class="font-semibold text-black font-display">
                        <a href="#workplace">WORKPLACE ISSUES</a>
                    </li>
                    <li class="font-semibold text-red-600 font-display">
                        <a href="#" @click.prevent="next()">TAKE THE TEST</a>
                    </li>
                    <li class="font-semibold text-black font-display">
                        ZOOM WITH US
                    </li>
                    <li class="font-semibold text-black font-display">
                        <a href="#faq">FAQ</a>
                    </li>
                    <li class="font-semibold text-black font-display"></li>
                </ul>
            </div>
        </nav>
    </div>
</template>
<script>
import { ref } from "vue";
export default {
    setup() {
        let showMenu = ref(false);
        const toggleNav = () => (showMenu.value = !showMenu.value);
        return {
            showMenu,
            toggleNav,
        };
    },
    methods: {
        next() {
            this.$emit("onSubmit", {});
        },
    },
};
</script>
