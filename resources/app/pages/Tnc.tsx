import Content from '@/components/pages/tnc/Content';
import Sidebar from '@/components/pages/tnc/Sidebar';
import { Tabs } from '@/components/ui/tabs';

const Tnc = () => {
  return (
    <div className="p-4">
      <Tabs defaultValue={'contact'}>
        <div className="flex flex-col md:flex-row gap-2">
          <div className="basis-1 md:basis-1/4">
            <Sidebar />
          </div>
          <Content />
        </div>
      </Tabs>
    </div>
  );
};

export default Tnc;
