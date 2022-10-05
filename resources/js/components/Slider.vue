<template>
    <div class="flex justify-center mb-32 md:mb-56 fl-porto" id="process">
        <div class="container flex flex-wrap">
            <div class="w-full md:w-88">
                <div class="bg-black p-4 md:p-10 text-center md:text-left">
                    <h2
                        class="
                            text-4xl
                            font-semibold font-display
                            uppercase
                            text-white
                            mt-2
                            md:mt-0
                            leading-tight
                            md:leading-none
                        "
                    >
                        What’s the process?
                    </h2>
                    <div
                        class="
                            my-2
                            mt-5.5
                            mb-2
                            w-32
                            mx-auto
                            md:mx-0
                            border-3 border-white
                        "
                    ></div>
                    <h3
                        class="
                            my-4
                            text-base
                            md:text-xl
                            text-white
                            font-robert
                            md:w-4/5
                            leading-tight
                            font-light
                        "
                    >
                        While every case is different the steps below outline
                        the beginning stages to determine how much your case is
                        worth and what we can get quickly.
                    </h3>
                    <div class="md:flex mt-14 md:mt-6 mb-6 md:mb-6 md:w-5/6">
                        <img
                            alt="..."
                            src="/images/ellipese-1.png"
                            class="mb-2 w-12 h-12 m-auto"
                        />
                        <h2
                            class="
                                text-lgx
                                md:text-2xl
                                uppercase
                                font-medium font-display
                                text-white
                                ml-4
                                leading-tight
                            "
                        >
                            Fill out our questionnaire online or call us by
                            phone so we can gather details.
                        </h2>
                    </div>
                    <div class="md:flex my-10 md:w-5/6">
                        <img
                            alt="..."
                            src="/images/ellipese-2.png"
                            class="mb-2 w-12 h-12 m-auto"
                        />
                        <h2
                            class="
                                text-lgx
                                md:text-2xl
                                uppercase
                                font-medium font-display
                                text-white
                                ml-4
                                leading-tight
                            "
                        >
                            After a quick interview we determine if you have a
                            case, you retain US OR A PARTNER attorney.
                        </h2>
                    </div>
                    <div class="md:flex my-8">
                        <img
                            alt="..."
                            src="/images/ellipese-3.png"
                            class="mb-2 w-12 h-12 m-auto"
                        />
                        <h2
                            class="
                                text-lgx
                                md:text-2xl
                                uppercase
                                font-medium font-display
                                text-white
                                ml-4
                                leading-tight
                            "
                        >
                            We educate your workplace on any illegal activity
                            and enforce they they compensate you fairly. If they
                            refuse, we sue.
                        </h2>
                    </div>
                    <div class="md:flex mt-13">
                        <button
                            @click.prevent="next()"
                            class="
                                bg-red-600
                                font-semibold font-display
                                px-6
                                py-3
                                md:py-4
                                text-2xl
                                mb-1
                                uppercase
                                text-white
                                w-full
                                md:w-58
                            "
                        >
                            GET STARTED
                        </button>
                        <div class="md:ml-10 leading-tight my-4 md:my-0">
                            <h3
                                class="
                                    font-medium
                                    uppercase
                                    text-grey
                                    font-display
                                    text-xl
                                    md:text-2xl
                                "
                            >
                                OR GET STARTED BY PHONE
                            </h3>
                            <h3
                                class="
                                    font-medium
                                    uppercase
                                    text-white
                                    font-display
                                    text-xl
                                    md:text-2xl
                                    leading-3
                                "
                            >
                                <a href="tel:+18885941532">(888) 594-1532</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-65">
                <carousel :items-to-show="1" autoplay="2500" :wrapAround="true">
                    <slide
                        v-for="slide in slideItems"
                        :key="slide.id"
                        class="flex-col"
                    >
                        <img
                            :src="`/images/img-${slide.id}.png`"
                            class="w-full"
                        />
                        <div class="relative bg-[#2E2E2E] p-8">
                            <p
                                class="
                                    text-left text-sm
                                    font-light font-robert
                                    text-white
                                "
                            >
                                "{{ slide.body }}"
                            </p>
                            <div class="flex mt-6">
                                <h4 class="font-display font-medium text-white">
                                    {{ slide.name }}
                                </h4>
                                <p
                                    class="
                                        font-display font-thin
                                        text-white
                                        ml-2
                                    "
                                >
                                    - {{ slide.role }}
                                </p>
                            </div>
                        </div>
                    </slide>
                </carousel>
            </div>
        </div>
    </div>
</template>

<script>
import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide } from "vue3-carousel";
export default {
    data() {
        return {
            slideItems: [
                {
                    id: 1,
                    name: "Florence H.",
                    role: "Receptionist",
                    body: "SWH interviewed me the same day. Within a few short weeks my old boss wrote me a check for $72,000 for employment violations he committed.",
                },
                {
                    id: 2,
                    name: "Meryam D.",
                    role: "Factory Worker",
                    body: "I was working 50-60 hours a week but only being paid for 40. When I brought it up to them I was laid off a few days later. SWH helped me settle with my former employer for $35,000.",
                },
                {
                    id: 3,
                    name: "Sunny C.",
                    role: "Designer",
                    body: "A client of my employer would always hit on me and act innapropriate. When I complained my boss told me to deal with it so we wouldn’t lose the client. SWH got me $86,700.",
                },
                {
                    id: 4,
                    name: "Petroska V.",
                    role: "Executive Assistant",
                    body: "I needed to take time off for a serious medical issue. My work fired me improperly and I was left without health insurance coverage. SWH ended up getting me $185,000 to help me.",
                },
            ],
        };
    },
    methods: {
        next() {
            this.$emit("onSubmit", {});
        },
    },
    components: {
        Carousel,
        Slide,
    },
};
</script>
