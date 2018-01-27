<script>
var Button = {
  created: function() {
        let self = this
    this.bus.$on("start_registering", $event => {
      console.log("Aangemaakt");
      // console.log(this);
      self.bus.$emit("register_component", this);
    });
  },
  methods: {
  }
};
module.exports = Button;
</script>
