<template>
    <section class="bg-black">
        <div class="container mx-auto px-2 md:px-6 text-center py-20 md:py-10" id="workplace">
            <h2
                class="
                    text-3.6xl
                    md:text-4xl
                    font-bold font-display
                    uppercase
                    leading-none
                    text-center text-white
                "
            >
                {{ title }}
            </h2>
            <button
                class="
                    bg-red-600
                    font-bold
                    mt-6
                    py-1
                    text-3.3xl
                    uppercase
                    font-display
                    text-white
                    w-64
                    md:w-78
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
};
</script>
