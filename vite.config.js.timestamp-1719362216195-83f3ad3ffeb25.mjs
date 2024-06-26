// vite.config.js
import { defineConfig } from "file:///Users/imac/Documents/AllureEssence/allure/node_modules/vite/dist/node/index.js";
import laravel from "file:///Users/imac/Documents/AllureEssence/allure/node_modules/laravel-vite-plugin/dist/index.js";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: [
        "resources/sass/app.scss",
        "resources/js/app.js",
        "resources/css/app.css",
        "resources/js/bootstrap.js",
        "resources/js/jquery.min.js",
        "resources/js/popper.min.js",
        "resources/js/bootstrap.bundle.min.js",
        "resources/js/jquery-3.0.0.min.js",
        "resources/js/plugin.js",
        "resources/js/jquery.mCustomScrollbar.concat.min.js",
        "resources/js/custom.js",
        "resources/css/responsive.css",
        "resources/css/jquery.mCustomScrollbar.min.css",
        "resources/css/owl.carousel.min.css"
      ],
      refresh: true
    })
  ]
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCIvVXNlcnMvaW1hYy9Eb2N1bWVudHMvQWxsdXJlRXNzZW5jZS9hbGx1cmVcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfZmlsZW5hbWUgPSBcIi9Vc2Vycy9pbWFjL0RvY3VtZW50cy9BbGx1cmVFc3NlbmNlL2FsbHVyZS92aXRlLmNvbmZpZy5qc1wiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9pbXBvcnRfbWV0YV91cmwgPSBcImZpbGU6Ly8vVXNlcnMvaW1hYy9Eb2N1bWVudHMvQWxsdXJlRXNzZW5jZS9hbGx1cmUvdml0ZS5jb25maWcuanNcIjtpbXBvcnQgeyBkZWZpbmVDb25maWcgfSBmcm9tICd2aXRlJztcbmltcG9ydCBsYXJhdmVsIGZyb20gJ2xhcmF2ZWwtdml0ZS1wbHVnaW4nO1xuXG5leHBvcnQgZGVmYXVsdCBkZWZpbmVDb25maWcoe1xuICAgIHBsdWdpbnM6IFtcbiAgICAgICAgbGFyYXZlbCh7XG4gICAgICAgICAgICBpbnB1dDogW1xuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvc2Fzcy9hcHAuc2NzcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy9hcHAuanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvY3NzL2FwcC5jc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvanMvYm9vdHN0cmFwLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL2pxdWVyeS5taW4uanMnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvanMvcG9wcGVyLm1pbi5qcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy9ib290c3RyYXAuYnVuZGxlLm1pbi5qcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy9qcXVlcnktMy4wLjAubWluLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL3BsdWdpbi5qcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9qcy9qcXVlcnkubUN1c3RvbVNjcm9sbGJhci5jb25jYXQubWluLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL2N1c3RvbS5qcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9jc3MvcmVzcG9uc2l2ZS5jc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvY3NzL2pxdWVyeS5tQ3VzdG9tU2Nyb2xsYmFyLm1pbi5jc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvY3NzL293bC5jYXJvdXNlbC5taW4uY3NzJyxcbiAgICAgICAgICAgIF0sXG4gICAgICAgICAgICByZWZyZXNoOiB0cnVlLFxuICAgICAgICB9KSxcbiAgICBdLFxufSk7XG4iXSwKICAibWFwcGluZ3MiOiAiO0FBQWdULFNBQVMsb0JBQW9CO0FBQzdVLE9BQU8sYUFBYTtBQUVwQixJQUFPLHNCQUFRLGFBQWE7QUFBQSxFQUN4QixTQUFTO0FBQUEsSUFDTCxRQUFRO0FBQUEsTUFDSixPQUFPO0FBQUEsUUFDSDtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxNQUNKO0FBQUEsTUFDQSxTQUFTO0FBQUEsSUFDYixDQUFDO0FBQUEsRUFDTDtBQUNKLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
