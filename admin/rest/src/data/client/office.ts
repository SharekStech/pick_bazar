import { Office, OfficeInput, OfficeQueryOptions } from '@/types';
import { API_ENDPOINTS } from './api-endpoints';
import { crudFactory } from './curd-factory';
import { HttpClient } from './http-client';

export const officeClient = {
  ...crudFactory<Office, OfficeQueryOptions, OfficeInput>(API_ENDPOINTS.OFFICES),
};