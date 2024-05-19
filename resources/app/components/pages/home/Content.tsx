import { HomeContext } from '@/provider/HomeProvider';
import { useContext } from 'react';

const Content = () => {
  const { cigrattes } = useContext(HomeContext);
  return (
    <div className="md:px-4">
      <div className="grid gird-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 flex-wrap">
        {cigrattes.map((x) => (
          <div
            key={x.id}
            className="relative rounded-md h-[250px] bg-center bg-no-repeat bg-cover hover:scale-105 cursor-pointer transition-transform"
            style={{ 'background-image': `url('${x.img_path}')` } as React.CSSProperties}
          >
            <div className="rounded-b-md absolute bottom-0 inset-x-0 bg-slate-900 text-white text-xs py-1 text-center">
              {x.name}
            </div>
          </div>
        ))}
      </div>
    </div>
  );
};

export default Content;
