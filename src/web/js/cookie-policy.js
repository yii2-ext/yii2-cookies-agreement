/**
 * Инициализирует баннер согласия на использование cookie.
 *
 * При загрузке DOM проверяет наличие элементов баннера и кнопки закрытия.
 * Если куки `cookie-policy` не установлены — отображает баннер.
 * По клику на кнопку закрытия устанавливает куки `cookie-policy` со значением `'1'`
 * и скрывает баннер.
 *
 * @returns {void}
 */
document.addEventListener("DOMContentLoaded", function () {
  var banner = document.querySelector(".cookie-policy");
  var closeButton = document.querySelector(
    ".cookie-policy .cookie-policy-close",
  );

  if (!banner || !closeButton) {
    return;
  }

  if (!Cookies.get("cookie-policy")) {
    banner.style.display = "flex";
  }

  /**
   * Обработчик клика по кнопке закрытия баннера.
   * Устанавливает куки `cookie-policy` и скрывает баннер.
   *
   * @returns {void}
   */
  closeButton.addEventListener("click", function () {
    Cookies.set("cookie-policy", "1");
    banner.style.display = "none";
  });
});
