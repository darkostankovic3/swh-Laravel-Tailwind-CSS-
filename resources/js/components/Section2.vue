<template>
    <section class="bg-[#1E1E1E]">
        <div class="container mx-auto px-2 md:px-6 text-center pt-20 pb-16">
            <h2
                class="
                    text-3.6xl
                    md:text-4.5xl
                    font-bold font-display
                    uppercase
                    leading-tight
                    text-center text-white
                "
            >
                {{ title }}
            </h2>
            <div
                class="my-6 md:my-2 m-auto w-40 border-4 border-white md:mb-5.5"
            ></div>
            <h3 class="my-4 text-lg text-white font-light font-robert md:px-58">
                {{ description }}
            </h3>
            <button
                @click.prevent="next()"
                class="
                    bg-red-600
                    font-bold
                    mt-6
                    py-3
                    md:py-4
                    text-2xl
                    md:text-xl
                    uppercase
                    font-display
                    text-white
                    w-full
                    md:w-67
                "
            >
                {{ button }}
            </button>
        </div>
    </section>
</template>
<script>
export default {
    props: {
        title: {
            type: String,
        },
        description: {
            type: String,
        },
        button: {
            type: String,
        },
    },
    data() {
        return {};
    },
    methods: {
        next() {
            this.$emit("onSubmit", {});
        },
    },
};
</script>
