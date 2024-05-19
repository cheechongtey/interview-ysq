import { Cigratte } from '@/types/cigratte';
import React, { useState } from 'react';
import useSWR from 'swr';

export const HomeContext = React.createContext<{
  cigrattes: Cigratte[];
  cigratteTypes: any[];
  typeId: string;
  onChangeType: (id: string) => void;
}>({
  cigrattes: [],
  cigratteTypes: [],
  typeId: 'all',
  onChangeType: () => {},
});

const fetcher = (url: string) => fetch(url).then((r) => r.json());

const HomeProvider = ({ children }: { children: React.ReactNode }) => {
  const [typeId, setTypeId] = useState<string>('all');
  const { data: cigrattes, mutate } = useSWR(
    `/api/v1/cigrattes${typeId ? `/${typeId}` : ''}`,
    fetcher
  );
  const { data: cigratteTypes } = useSWR(`/api/v1/cigratte-types`, fetcher);

  const onChangeType = (id: string) => {
    setTypeId(id);
    // mutate();
  };

  return (
    <HomeContext.Provider
      value={{
        cigrattes: cigrattes ?? [],
        cigratteTypes: cigratteTypes ?? [],
        typeId,
        onChangeType,
      }}
    >
      {children}
    </HomeContext.Provider>
  );
};

export default HomeProvider;
