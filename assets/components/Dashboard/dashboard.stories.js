import Dashboard from "@/components/Dashboard/Dashboard.vue";

export default {
    title: "Components/Dashboard",
    component: Dashboard,
};

const Template = (args) => ({
    components: { Dashboard },
    setup() {
        return { args };
    },
    template: "<Dashboard v-bind='args' />",
});

export const Default = Template.bind({});
Default.args = {};
