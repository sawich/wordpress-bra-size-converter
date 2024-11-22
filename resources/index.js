document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("bra-size-form");
  const result = document.getElementById("bra-size-result");
  const input = document.getElementById("bra-size-input");

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const value = input.value.trim();

    try {
      const response = await fetch(braSizePluginContext.requestUrl, {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: new URLSearchParams({
          action: "convert_bra_size",
          bra_size: value,
        }),
      });

      const text = await response.text();
      result.innerHTML = `<p>${text}</p>`;
    } catch (error) {
      result.innerHTML = "<p id=\"bra-size-error\">Произошла ошибка. Попробуйте снова.</p>";
    }
  });
});
