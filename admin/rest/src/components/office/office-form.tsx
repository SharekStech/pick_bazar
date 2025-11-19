import Input from '@/components/ui/input';
import { useForm } from 'react-hook-form';
import Button from '@/components/ui/button';
import Description from '@/components/ui/description';
import Card from '@/components/common/card';
import { useRouter } from 'next/router';
import { useTranslation } from 'next-i18next';
import { yupResolver } from '@hookform/resolvers/yup';
import { officeValidationSchema } from './office-validation-schema';
import ValidationError from '@/components/ui/form-validation-error';
import { useCreateOfficeMutation, useUpdateOfficeMutation } from '@/data/office';
import { toast } from 'react-toastify';
import Label from '@/components/ui/label';
import SelectInput from '@/components/ui/select-input';

type FormValues = {
  name: string;
  type: string;
  parent_id?: number;
  address: string;
  lat?: number;
  lng?: number;
};

const officeTypeOptions = [
  { value: 'HEAD', label: 'Head Office' },
  { value: 'SUB_HEAD', label: 'Sub Office' },
];

type IProps = {
  initialValues?: any;
};

export default function CreateOrUpdateOfficeForm({ initialValues }: IProps) {
  const router = useRouter();
  const { t } = useTranslation();
  
  const {
    register,
    handleSubmit,
    control,
    watch,
    formState: { errors },
  } = useForm<FormValues>({
    shouldUnregister: true,
    resolver: yupResolver(officeValidationSchema),
    defaultValues: initialValues,
  });

  const { mutate: createOffice, isLoading: creating } = useCreateOfficeMutation();
  const { mutate: updateOffice, isLoading: updating } = useUpdateOfficeMutation();

  const watchedType = watch('type');

  const onSubmit = async (values: FormValues) => {
    const input = {
      name: values.name,
      type: values.type,
      address: values.address,
      lat: values.lat || null,
      lng: values.lng || null,
      parent_id: values.parent_id || null,
    };

    try {
      if (initialValues) {
        updateOffice({
          id: initialValues.id,
          ...input,
        });
      } else {
        createOffice(input);
      }
    } catch (error) {
      console.error(error);
    }
  };

  return (
    <form onSubmit={handleSubmit(onSubmit)}>
      <div className="flex flex-wrap pb-8 border-b border-dashed border-border-base my-5 sm:my-8">
        <Description
          title={t('form:input-label-description')}
          details={`${
            initialValues
              ? t('form:item-description-edit')
              : t('form:item-description-add')
          } ${t('form:office-form-info-help-text')}`}
          className="w-full px-0 sm:pe-4 md:pe-5 pb-5 sm:w-4/12 md:w-1/3 sm:py-8"
        />

        <Card className="w-full sm:w-8/12 md:w-2/3">
          <Input
            label={t('form:input-label-name')}
            {...register('name')}
            error={t(errors.name?.message!)}
            variant="outline"
            className="mb-5"
          />

          <div className="mb-5">
            <Label>{t('form:input-label-type')}</Label>
            <SelectInput
              name="type"
              control={control}
              getOptionLabel={(option: any) => option.label}
              getOptionValue={(option: any) => option.value}
              options={officeTypeOptions}
            />
            <ValidationError message={t(errors.type?.message!)} />
          </div>

          <Input
            label={t('form:input-label-address')}
            {...register('address')}
            error={t(errors.address?.message!)}
            variant="outline"
            className="mb-5"
          />

          <div className="flex">
            <Input
              label={t('form:input-label-latitude')}
              {...register('lat')}
              error={t(errors.lat?.message!)}
              variant="outline"
              className="mb-5 me-5"
              type="number"
              step="any"
            />
            <Input
              label={t('form:input-label-longitude')}
              {...register('lng')}
              error={t(errors.lng?.message!)}
              variant="outline"
              className="mb-5"
              type="number"
              step="any"
            />
          </div>
        </Card>
      </div>

      <div className="mb-4 text-end">
        <Button
          variant="outline"
          onClick={router.back}
          className="me-4"
          type="button"
        >
          {t('form:button-label-back')}
        </Button>

        <Button loading={creating || updating}>
          {initialValues
            ? t('form:button-label-update-office')
            : t('form:button-label-add-office')}
        </Button>
      </div>
    </form>
  );
}