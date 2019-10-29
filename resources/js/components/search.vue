<template>
  <div class="col-lg-4 col-sm-6">
    <div v-for="item in events" :key="item.id">
      <div class="card-service">
        <div class="service-icon text-center">
          <img :src="'/assets/img/kategori/'+item.kategori.foto" width="70px" />
        </div>
        <h3 id="title" style="color:black" class="text-center">{{ item.title }}</h3>
        <p style="color:black" class="text-center">{{ item.description }}</p>
        <br />
        <div>
          <img src="/frontend/img/home/png/startdate.png" width="20px" alt />
          {{ item.start_date }}
          <b>|</b>
          <img src="/frontend/img/home/png/starttime.png" width="20px" alt />
          {{ item.start_date }}
        </div>
        <br />
        <div>
          <img src="/frontend/img/home/png/enddate.png" width="20px" alt />
          {{ item.end_date }}
          <b>|</b>
          <img src="/frontend/img/home/png/endtime.png" width="20px" alt />
          {{ item.end_date }}
        </div>
        <br />
        <p class="text-right">By : {{ item.user.name }}</p>
        <br />
        <a
          class="edit-event-calendar"
          title="Edit"
          href="#"
          data-toggle="modal"
          data-target="#edit-data-calendar"
          :data-id="item.id"
          :data-title="item.title"
          :data-color="item.color"
          :data-description="item.description"
          :data-id_kategori="item.id_kategori"
          :data-start_date="item.start_date"
          :data-end_date="item.end_date"
        >
          <img src="/frontend/img/home/png/edit.png" width="12px" />
        </a> |
        <a
          class="hapus-event-calendar"
          title="Delete"
          href="#"
          data-toggle="modal"
          data-target="#hapus-data-calendar"
          :data-id="$item.id"
          :data-title="$item.title"
          :data-color="$item.color"
          :data-description="$item.description"
          :data-id_kategori="$item.id_kategori"
          :data-start_date="$item.start_date"
          :data-end_date="$item.end_date"
        >
          <img src="/frontend/img/home/png/delete.png" width="12px" />
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      events: []
    };
  },
  created() {
    this.getEvents();
  },
  methods: {
    getEvents() {
      axios
        .get("/api/event")
        .then(res => {
          this.events = res.data.data;
        })
        .catch(err => {
          console.log(err);
        });
    }
  }
};
</script>

<style>
</style>
