import Layout from '@/components/layouts/admin';
import CreateOrUpdateOfficeForm from '@/components/office/office-form';
import { useTranslation } from 'next-i18next';
import { serverSideTranslations } from 'next-i18next/serverSideTranslations';
import { adminOnly } from '@/utils/auth-utils';

export default function CreateOfficePage() {
  const { t } = useTranslation();
  return (
    <>
      <div className="py-5 sm:py-8 flex border-b border-dashed border-border-base">
        <h1 className="text-lg font-semibold text-heading">
          {t('form:form-title-create-office')}
        </h1>
      </div>
      <CreateOrUpdateOfficeForm />
    </>
  );
}

CreateOfficePage.authenticate = {
  permissions: adminOnly,
};

CreateOfficePage.Layout = Layout;

export const getStaticProps = async ({ locale }: any) => ({
  props: {
    ...(await serverSideTranslations(locale, ['form', 'common'])),
  },
});