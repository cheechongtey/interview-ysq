import { TabsList, TabsTrigger } from '@/components/ui/tabs';

const Sidebar = () => {
  return (
    <div className="w-full overflow-y-scroll md:overflow-visible">
      <TabsList asChild>
        <div className="flex md:flex-col items-center gap-4 bg-transparent">
          <TabsTrigger value={'contact'} className="uppercase">
            Contact
          </TabsTrigger>
          <TabsTrigger value={'legal'} className="uppercase">
            Legal
          </TabsTrigger>
        </div>
      </TabsList>
    </div>
  );
};

export default Sidebar;
