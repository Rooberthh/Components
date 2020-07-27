<template>
    <div>
        <ul class="flex mb-4 border-gray-500" role="tablist">
            <li
                v-for="(tab, index) in tabs"
                class="px-4 bg-white py-2"
                :class="{ 'border border-b-0 rounded-t-lg -mb-px': tab.isActive }"
            >
                <button
                    v-text="tab.title"
                    :class="{ 'font-bold': tab.isActive }"
                    class="focus:outline-none"
                    role="tab"
                    :aria-selected="tab.isActive"
                    @click="activeTab = tab"
                ></button>
            </li>
        </ul>
        <slot></slot>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                tabs: {},
                activeTab: null
            }
        },

        mounted() {
            this.tabs = this.$children;
            this.setInitialActiveTab();
        },
        watch: {
            activeTab(activeTab) {
                this.tabs.map(tab => (tab.isActive = tab === activeTab));
            }
        },
        methods: {
           setInitialActiveTab() {
               this.activeTab = this.tabs.find(tab => tab.active) || this.tabs[0];
           }
        }
    }
</script>

<style scoped>

</style>
