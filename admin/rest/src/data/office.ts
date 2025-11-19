import { useMutation, useQuery } from 'react-query';
import { toast } from 'react-toastify';
import { useTranslation } from 'next-i18next';
import { Routes } from '@/config/routes';
import { useRouter } from 'next/router';

const mockOffices = [
  {
    id: '1',
    name: 'Main Head Office',
    type: 'HEAD',
    address: '123 Business Street, City Center',
    lat: 40.7128,
    lng: -74.0060,
    created_at: '2024-01-01T00:00:00Z',
    updated_at: '2024-01-01T00:00:00Z',
  },
  {
    id: '2', 
    name: 'Branch Office North',
    type: 'SUB_HEAD',
    address: '456 North Avenue, Uptown',
    lat: 40.7589,
    lng: -73.9851,
    created_at: '2024-01-02T00:00:00Z',
    updated_at: '2024-01-02T00:00:00Z',
  },
];

export const useCreateOfficeMutation = () => {
  const { t } = useTranslation();
  const router = useRouter();

  return useMutation(
    (input: any) => Promise.resolve({ ...input, id: Date.now().toString() }),
    {
      onSuccess: () => {
        router.push(Routes.office.list);
        toast.success(t('common:successfully-created'));
      },
    }
  );
};

export const useUpdateOfficeMutation = () => {
  const { t } = useTranslation();
  const router = useRouter();

  return useMutation(
    (input: any) => Promise.resolve(input),
    {
      onSuccess: () => {
        router.push(Routes.office.list);
        toast.success(t('common:successfully-updated'));
      },
    }
  );
};

export const useDeleteOfficeMutation = () => {
  const { t } = useTranslation();

  return useMutation(
    (id: string) => Promise.resolve(id),
    {
      onSuccess: () => {
        toast.success(t('common:successfully-deleted'));
      },
    }
  );
};

export const useOfficeQuery = ({ id }: { id: string }) => {
  const { data, error, isLoading } = useQuery(
    ['office', id],
    () => Promise.resolve(mockOffices.find(office => office.id === id)),
    {
      keepPreviousData: true,
    }
  );

  return {
    office: data,
    error,
    loading: isLoading,
  };
};

export const useOfficesQuery = (options: any) => {
  const { data, error, isLoading } = useQuery(
    ['offices', options],
    () => Promise.resolve({
      data: mockOffices,
      paginatorInfo: {
        total: mockOffices.length,
        currentPage: 1,
        perPage: 20,
        hasMorePages: false,
      }
    }),
    {
      keepPreviousData: true,
    }
  );

  return {
    offices: data?.data ?? [],
    paginatorInfo: data?.paginatorInfo ?? {},
    error,
    loading: isLoading,
  };
};