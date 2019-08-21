<script>
let Frame = {
  data: function() {
    return {
      label: "Frame",
    };
  },
  created: function() {
    
  },
  mounted: function() {
    this.register()
  },
  methods: {
    register: function() {
      this.bus.$emit("register_component", this);
    }
  }
};
module.exports = Frame;
</script>
