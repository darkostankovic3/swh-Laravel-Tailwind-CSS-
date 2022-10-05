<!-- Use preprocessors via the lang attribute! e.g. <template lang="pug"> -->
<template v-html="svgRaw" v-hoist>
    <section>
        <div
            class="container mx-auto md:px-6 text-center py-24 md:py-20"
            id="faq"
        >
            <div class="bg-[#F7F7F7] md:px-20 py-20 md:pt-8 md:pb-12">
                <h2
                    class="
                        text-3.3xl
                        md:text-4xl
                        font-semibold font-display
                        uppercase
                        text-center text-black
                    "
                >
                    Frequently asked questions
                </h2>
                <div
                    class="my-6 md:mt-2 m-auto w-40 border-4 border-black mb-6"
                ></div>
                <h3
                    class="
                        text-xl
                        md:text-2xl
                        uppercase
                        font-semibold font-display
                        text-black
                    "
                >
                    or contact us by phone
                </h3>
                <h3
                    class="
                        text-xl
                        md:text-2xl
                        font-semibold font-display
                        text-red-600
                        leading-none
                    "
                >
                    <a href="tel:+18885941532">(888) 594-1532</a>
                </h3>
                <div
                    enter-active-class="transition duration-150 ease-out transform"
                    enter-class="opacity-0"
                    enter-to-class="opacity-100"
                    leave-active-class="absolute transition duration-100 ease-in transform"
                    leave-class="opacity-100"
                    leave-to-class="opacity-0"
                    move-class="transition duration-300 ease-in-out transform"
                    tag="div"
                    class="mt-6 px-2"
                >
                    <div
                        v-for="item in listItems"
                        :key="item.id"
                        :open="isOpen && currentIndex === item.id"
                        class="relative space-y-1 cursor-pointer md:px-16"
                        @click.prevent="toggle(item.id)"
                    >
                        <div class="border-b-2 border-accordionLine py-4">
                            <div>
                                <div class="flex justify-between">
                                    <h2
                                        class="
                                            flex-1
                                            text-lg
                                            md:text-lgx
                                            font-mormal font-robert font-normal
                                            text-left
                                        "
                                    >
                                        {{ item.title }}
                                    </h2>
                                    <svg
                                        :class="{
                                            'rotate-180':
                                                currentIndex === item.id,
                                        }"
                                        class="
                                            flex-shrink-0
                                            w-5
                                            h-5
                                            ml-2
                                            -mr-1
                                            text-gray-400
                                            transition
                                            transform
                                            duration-300
                                            ease-in-out
                                        "
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>

                            <transition
                                enter-active-class="transition duration-150 ease-out transform delay-100"
                                enter-class="opacity-0 -translate-y-2"
                                enter-to-class="opacity-100 translate-y-0"
                                leave-active-class="absolute transition duration-100 ease-in transform"
                                leave-class="opacity-100 translate-y-0"
                                leave-to-class="opacity-0 -translate-y-2"
                            >
                                <div
                                    v-html="item.body"
                                    v-show="isOpen && currentIndex === item.id"
                                    class="
                                        w-full
                                        text-base
                                        leading-5
                                        font-robert font-normal
                                        text-accordionText
                                        md:text-left
                                        py-2
                                    "
                                ></div>
                            </transition>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            isOpen: false,
            currentIndex: null,
            listItems: [
                {
                    id: 1,
                    title: "How do I know if I am owed money? Do I have a case?",
                    body: "After spending a few minutes with SWH we will be able to tell you what the right next steps are. <br> If you’re hesitant we suggest you take our test and speak with one of our friendly reps at no cost to you. Since you’re already here chances are good that you deserve the help you need.",
                },
                {
                    id: 2,
                    title: "What if I don’t want to be involved in a lawsuit or police?",
                    body: "About 90% of the cases we handle are settled without involving courts or police. Typically, after the interview process, we will send the offending employer a letter that educates them on the laws they broke and demand that you be compensated.",
                },
                {
                    id: 3,
                    title: "What should I do right now?",
                    body: "The most important thing you can do is write down any/all details of the following events that you may have experienced. <br> The more detailed you are, the stronger your case will be. Jokes, comments, or instructions regarding, race, religion, sex, sexual orientation, disabilities, or anything else made by anyone in your workplace whether about you or someone else. Any difference in pay between people based primarily on their race, religion, sex, sexual orientation, disability, or other. <br><br> Write down any poor taste jokes or comments you have heard made about anyone for any reason. This could be comments made about customers, clients, coworkers, managers… anyone. <br><br> If you have witnessed, in any way, anything involving sex in the workplace write it down in detail. This includes making sexual comments, flirting, touching, and anything else in this category whether it was consensual or not.",
                },
                {
                    id: 4,
                    title: "What will this cost me?",
                    body: "This will cost you nothing unless we win or settle a case. Once we interview you and determine a value for your case you will be presented with a retainer agreement which will specify our percentage of what we recover for you. <br> For example, if we hear your case and specify we will take it on for 20% and we win you $100,000, we keep $20,000 and you keep $80,000. This is entirely optional and you can decline to move forward in which case you would owe us nothing.",
                },
                {
                    id: 5,
                    title: "I am in a different state than my employer",
                    body: "It doesn’t matter. While SWH mostly represents California employees it can represent client’s anywhere. <br> Remember, while there are state laws that protect employees there are also federal ones too",
                },
                {
                    id: 6,
                    title: "I work remotely. Can you still help?",
                    body: "Absolutely. Laws regarding fair employment practices apply both in-person and digitally. <br> In fact, there are additional protections if you are working remotely.",
                },
                {
                    id: 7,
                    title: "What if I am an independent contractor?",
                    body: "All citizens have the right to a fair and safe working environment. <br> In addition, there are very strict rules regarding the difference between an independent contractor and an employee. <br> If your workplace has misclassified your employment type you might be owed big.",
                },
            ],
        };
    },
    methods: {
        toggle(id) {
            if (this.currentIndex !== id) {
                this.isOpen = true;
                this.currentIndex = id;
            } else if (this.currentIndex === id) {
                this.currentIndex = null;
            }
        },
    },
};
</script>
