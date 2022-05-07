<template>
  <div
    id="page-clock"
    class="
      px-2
      py-1
      mx-1
      text-xs
      font-extrabold
      text-center text-white
      bg-[#656565]
      w-28
      rounded-full
    "
    v-text="created"
  >
  </div>
</template>
<script>
export default {
  data() {
    return {
      interval: null,
      time: null,
    };
  },
  methods: {
    beforeDestroy() {
      // prevent memory leak
      clearInterval(this.interval);
    },
    created() {
      // update the time every second
      this.interval = setInterval(() => {
        // Concise way to format time according to system locale.
        // In my case this returns "3:48:00 am"
        this.time = Intl.DateTimeFormat(navigator.language, {
          hour: "numeric",
          minute: "numeric",
          second: "numeric",
        }).format();
      }, 1000);
    },
  },
};
</script>
