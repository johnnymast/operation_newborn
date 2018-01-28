<script>
var Button = {
  data: function() {
    return {
      label: "Button",
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
module.exports = Button;
</script>
