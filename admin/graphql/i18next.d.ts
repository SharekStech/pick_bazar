// // i18next.d.ts
// import 'i18next';

// declare module 'i18next' {
//   interface CustomTypeOptions {
//     returnNull: false;
//   }
// }


import i18n from "i18next";
import { initReactI18next } from "react-i18next";

i18n
  .use(initReactI18next)
  .init({
    lng: "en",
    fallbackLng: "en",
    interpolation: {
      escapeValue: false,
    },
  });

export default i18n;

