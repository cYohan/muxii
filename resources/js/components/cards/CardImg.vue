<template>
  <div
    v-if="status.type == 'img'"
    class="
      masonry-grid-item
      max-w-sm
      w-full
      h-auto
      text-left
      my-2
      row-span-1
      cursor-pointer
    "
    data-bs-toggle="offcanvas"
    :data-bs-target="`#offcanvasRight${status.id}`"
    aria-controls="offcanvasRight"
  >
    <div id="card-content" class="-my-3 bg-transparent">
      <div v-for="image in images" :key="image.id">
        <div class="item w-auto h-auto rounded-xl m-4 border-4 border-yellow">
          <img
            :src="`/storage/media/${status.id}/${image.file_name}`"
            class="object-cover rounded-xl p-1"
            alt="img"
          />
        </div>
      </div>
    </div>
    <div class="flex flex-col">
      <span v-text="status.type" class="text-pinky pl-7 text-xs"></span>
      <span v-text="status.title" class="text-white pl-7 text-lg"></span>
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
  data() {
    return { images: this.status.images };
  },
};
</script>