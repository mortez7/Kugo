/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});

let currentModal;
let modalDialog;
let alertModal = document.querySelector("#alert-modal");
let feedbackModal = document.querySelector("#feedback-modal");

const modalButtons = document.querySelectorAll("[data-toggle=modal]");

modalButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    event.preventDefault();
    currentModal = document.querySelector(button.dataset.target);
    currentModal.classList.toggle("is-open");

    modalDialog = currentModal.querySelector(".modal-dialog");

    currentModal.addEventListener("click", (event) => {
      if (!event.composedPath().includes(modalDialog)) {
        currentModal.classList.remove("is-open");
      }
    });
  });
});

document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    currentModal.classList.toggle("is-open");
  }
});


const phoneForms = document.querySelectorAll(".phone-form");

const emailForms = document.querySelectorAll(".email-form");

phoneForms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });

  validation
  .addField("[name=userphone]", [
  {
    rule: "required",
    errorMessage: "Укажите телефон",
  },
  ])
  .addField("[name=checkbox]", [
    {
      rule: "required",
      errorMessage: "Установите флажок",
    },
  ])
  .onSuccess((event) => {
    const thisForm = event.target;
    const formData = new FormData(thisForm);

    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
        method: thisForm.getAttribute("method"),
        body: formData,
      }).then((response) => {
        if (response.ok) {
          thisForm.reset();
          
          if(currentModal == undefined) {
            currentModal = feedbackModal;
          }
          console.log(currentModal);
          
          currentModal.classList.remove("is-open");
          alertModal.classList.add("is-open");

          currentModal = alertModal;
          modalDialog = currentModal.querySelector(".modal-dialog");

          currentModal.addEventListener("click", (event) => {
            if (!event.composedPath().includes(modalDialog)) {
              currentModal.classList.remove("is-open");
            }
          });
        } else {
          alert(response.statusText);
        }
      });
    };

    ajaxSend(formData);
  });
});

emailForms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });

  validation
  .addField("[name=usermail]", [
  {
    rule: "required",
    errorMessage: "Укажите почту",
  },
  {
    rule: "email",
    errorMessage: "Введите корректный формат почты",
  }
  ])

  .onSuccess((event) => {
    const thisForm = event.target;
    const formData = new FormData(thisForm);

    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
        method: thisForm.getAttribute("method"),
        body: formData,
      }).then((response) => {
        if (response.ok) {
          thisForm.reset();
          if(currentModal == undefined) {
            currentModal = feedbackModal;
          }
          alertModal.classList.add("is-open");
          
          currentModal = alertModal;
          modalDialog = currentModal.querySelector(".modal-dialog");

          console.log(currentModal);

          modalClose.addEventListener("click", (event) => {
            currentModal.classList.remove("is-open");
          });

          currentModal.addEventListener("click", (event) => {
            console.log(event.target);
            if (!event.composedPath().includes(modalDialog)) {
              currentModal.classList.remove("is-open");
            }
          });
        } else {
          alert(response.statusText);
        }
      });
    };

    ajaxSend(formData);
  });
});