<template>
    <section class="body-font border-t" id="test">
        <div class="md:container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div
                    v-for="item in listItems"
                    :key="item.id"
                    class="xl:w-1/3 md:w-1/2 md:p-4 mb-10 md:mb-0"
                >
                    <div
                        class="
                            border border-gray-300
                            px-2
                            md:px-6
                            py-4
                            md:p-10
                            bg-[#F7F7F7]
                            text-center
                        "
                    >
                        <div class="h-full md:h-20 flex items-center">
                            <img
                                alt="..."
                                src="/images/target_icon.png"
                                class="mb-2"
                            />
                            <div class="flex-grow ml-2 md:ml-6 text-left">
                                <h2
                                    class="
                                        text-3.2xl
                                        uppercase
                                        font-semibold font-display
                                    "
                                >
                                    {{ item.title }}
                                </h2>
                            </div>
                        </div>
                        <p
                            class="
                                my-6
                                font-normal font-robert
                                text-lg
                                h-38
                                md:h-35
                                text-left
                            "
                        >
                            {{ item.body }}
                        </p>
                        <h3 class="font-normal text-lg font-display">
                            How much can you get?
                        </h3>
                        <button
                            @click.prevent="next()"
                            class="
                                bg-red-600
                                font-bold font-display
                                mt-3
                                h-12
                                uppercase
                                text-2xl
                                md:text-3xl
                                text-white
                                w-full
                            "
                        >
                            Take the test
                        </button>
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
                    title: "overtime abuse",
                    body: "Overtime laws are designed to protect you from abuse. If your manager or employer failed to adhere to the laws perfectly and abused your time you are entitled to compensation.",
                },
                {
                    id: 2,
                    title: "RACE, SEX, AGE DISCRIMINATION",
                    body: "We the people have written laws that prevent employers from treating you differently because of your race. If you have been treated differently because of your race, you are entitled to compensation.",
                },
                {
                    id: 3,
                    title: "WHISTLEBLOWER",
                    body: "Have you witnessed bad or illegal behavior towards a co-worker and then got punished when you said something? This is illegal. You may be entitled to compensation.",
                },
                {
                    id: 4,
                    title: "SEXUAL HARASSMENT",
                    body: "If you have been sexually harassed at work by a coworker or manager and it made you feel uncomfortable.You may be entitled to compensation.",
                },
                {
                    id: 4,
                    title: "health discrimination",
                    body: "Do you have a health condition that your manager or employer is failing to accommodate? You may be entitled to compensation.",
                },
                {
                    id: 4,
                    title: "contractor misclassification",
                    body: "Employers will illegally misclassify you as a contractor to save money and beat taxes. If this has happened to you. You may be entitled to compensation.",
                },
            ],
        };
    },
    methods: {
        next() {
            this.$emit("onSubmit", {});
        },
    },
};
</script>
