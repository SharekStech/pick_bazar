import * as yup from 'yup';

export const officeValidationSchema = yup.object().shape({
  name: yup.string().required('form:error-name-required'),
  type: yup.string().required('form:error-type-required'),
  address: yup.string().required('form:error-address-required'),
  lat: yup.number().nullable().transform((value, originalValue) => 
    originalValue === '' ? null : value
  ),
  lng: yup.number().nullable().transform((value, originalValue) => 
    originalValue === '' ? null : value
  ),
  parent_id: yup.number().nullable().transform((value, originalValue) => 
    originalValue === '' ? null : value
  ),
});