<template>
    <div class="home-page bg-[url('/images/backgroud.png')]">
        <Navbar @onSubmit="submitContent" />
        <Content v-if="step === 1" @onSubmit="submitContent" />
        <Content2 :formData="data" v-else />
        <Slider @onSubmit="submitContent" />
        <Section1
            title="If you were subjected to illegal racism, harassment or hostility."
            button="You are owed money."
        />
        <List @onSubmit="submitContent" />
        <Section2
            title="the money your're owed may be big."
            description="Mistreatment of employees is a big deal. Califorinia has serious laws to protech employees from employer abuse and harassment. it's free to find out if you many be owed compenssation and only takes a few minites."
            button="how much am i owed?"
            @onSubmit="submitContent"
        />
        <Faq />
        <Section2
            title="Unsure if you are qualify for a case?"
            description="No worries. All it takes is a 15-minute conversation with us to know for sure."
            button="how much am I owed?"
            @onSubmit="submitContent"
        />
        <Footer @onSubmit="submitContent" />
    </div>
</template>

<script>
import Content from "../components/Content.vue";
import Content2 from "../components/Content2.vue";
import Form from "../components/Form.vue";
import Section1 from "../components/Section1.vue";
import Section2 from "../components/Section2.vue";
import List from "../components/List.vue";
import Slider from "../components/Slider.vue";
import Faq from "../components/Faq.vue";
import Navbar from "../components/Navbar.vue";
import Footer from "../components/Footer.vue";

export default {
    data() {
        return {
            step: 1,
            data: null,
        };
    },
    components: {
        Navbar,
        Content,
        Content2,
        List,
        Faq,
        Slider,
        Section1,
        Section2,
        Footer,
        Form,
    },
    methods: {
        submitContent(content) {
            this.step++;
            window.scrollTo(0, 0);
            this.data = content;
        },
    },
};
</script>

<style scoped></style>
