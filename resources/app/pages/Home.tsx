import Content from '@/components/pages/home/Content';
import Sidebar from '@/components/pages/home/Sidebar';
import { Tabs } from '@/components/ui/tabs';
import HomeProvider, { HomeContext } from '@/provider/HomeProvider';
import { useContext } from 'react';

export default function Home() {
  const { typeId } = useContext(HomeContext);

  return (
    <HomeProvider>
      <div className="p-4">
        <Tabs defaultValue={typeId ?? 'all'}>
          <div className="grid grid-cols-1 md:grid-cols-[280px_1fr] lg:grid-cols-[350px_1fr] gap-4">
            <Sidebar />
            <Content />
          </div>
        </Tabs>
      </div>
    </HomeProvider>
  );
}
