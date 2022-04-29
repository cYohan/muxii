<template>
  <div
    v-if="status.type == 'write'"
    class="
      break-inside
      max-w-sm
      w-full
      text-left
      my-2
      p-1
      row-span-1
      cursor-pointer
    "
    data-bs-toggle="offcanvas"
    :data-bs-target="`#offcanvasRight${status.id}`"
    aria-controls="offcanvasRight"
  >
    <div
      id="card-content"
      class="m-2 p-3 bg-gray-500 border-4 border-gr rounded-xl"
    >
      <div
        v-text="status.body"
        class="border-gr m-1"
      ></div>
    </div>
    <div class="flex flex-col">
      <span v-text="status.type" class="text-pinky pl-3 text-xs"></span>
      <span v-text="status.title" class="text-white pl-3 text-lg"></span>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    status: {
      type: Object,
      required: true,
    },
  },
};
</script>